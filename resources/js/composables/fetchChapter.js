import { ref } from 'vue';

export function useFetchChapter() {
    const data = ref(null);
    const error = ref(null);
    const loading = ref(false);
    let abortController = null;

    const fetchChapter = async (id) => {
        // Abandonner la requête précédente si elle existe
        if (abortController) {
            abortController.abort();
        }

        loading.value = true;
        error.value = null;

        try {
            abortController = new AbortController();

            const response = await fetch(`/api/v1/chapters/${id}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                signal: abortController.signal,
            });

            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }

            data.value = await response.json();
        } catch (e) {
            if (e.name !== 'AbortError') {
                error.value = e;
            }
        } finally {
            loading.value = false;
        }
    };

    return {
        data,
        error,
        loading,
        fetchChapter,
    };
}
import { ref } from 'vue';

export function useProgression() {
  const error = ref(null);

  const getProgress = async (storyId) => {
    try {
      const res = await fetch(`/api/v1/progression/${storyId}`, {
        headers: {
          'Accept': 'application/json'
        }
      });
      if (!res.ok) throw new Error('Erreur progression');
      return await res.json();
    } catch (err) {
      error.value = err;
    }
  };

  const updateProgress = async (storyId, chapterId) => {
    try {
      const res = await fetch(`/api/v1/progression/${storyId}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ chapter_id: chapterId }),
      });

      if (!res.ok) throw new Error('Erreur mise à jour progression');
      return await res.json();
    } catch (err) {
      error.value = err;
    }
  };

  return { getProgress, updateProgress, error };
}
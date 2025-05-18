@extends('layouts.vue')

@section('title', 'Accueil')

@section('content')
    <div class="container">
        <header class="header">
            <h1 id="typewriter-h1"></h1>
            <form method="POST" action="/logout" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </header>

        <h2 id="typewriter-h2"></h2>

        <ul class="story-list">
            @foreach ($stories as $story)
                <li>
                    <a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a>
                </li>
            @endforeach
            {{-- Exemple pour évolution futur du site --}}
            <a class="empty-story" href="/home">Escape Game</a>
            </br>
            <a class="empty-story" href="/home">Life Simulator</a>
            </br>
            <a class="empty-story" href="/home">Bookshelf</a>
            </br>
            <a class="empty-story" href="/home">Crisis Simulator</a>
            </br>
            <a class="empty-story" href="/home">Legacy of Kingdom</a>
        </ul>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        .container {
            padding: 2rem;
            font-family: 'VT323', monospace;
            color: #ffffff;
            background-color: #0f0f17;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        h1 {
            font-family: 'Press Start 2P', cursive;
            color: #4ffa00;
            text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.7);
            margin: 0;
        }

        .logout-form {
            margin: 0;
        }

        .logout-btn {
            font-family: 'Press Start 2P', cursive;
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem;
            background-color: #4ffa00;
            color: #121212;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 201, 17, 0.5);
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #121212;
            color: #4ffa00;
            box-shadow: 0 0 15px rgba(0, 255, 21, 0.7);
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        h2 {
            font-family: 'Press Start 2P', cursive;
            color: #4ffa00;
            text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.7);
            margin-bottom: 1rem;
        }

        ul.story-list {
            list-style: none;
            padding: 0;
            margin-top: 1.5rem;
        }

        ul.story-list li {
            margin-bottom: 1rem;
        }

        ul.story-list a {
            display: block;
            padding: 0.8rem 1rem;
            background-color: rgba(0, 0, 0, 0.5);
            border-left: 4px solid #ffffff;
            text-decoration: none;
            color: #4ffa00;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        ul.story-list a:before {
            content: '➤ ';
            color: #ffffff;
        }

        ul.story-list a:hover {
            background-color: rgba(0, 201, 17, 0.3);
            color: #ffffff;
            border-left-width: 8px;
        }

        ul.story-list a.empty-story {
            position: relative;
            background-color: rgba(84, 84, 84, 0.122);
            color: #b6b6b6;
            font-size: 1.2rem;
            text-decoration: none;
            padding: 0.8rem 1rem;
            border-left: 4px solid #ffffff;
            transition: all 0.3s ease;
        }

        ul.story-list a.empty-story:hover {
            background-color: rgba(93, 40, 40, 0.122);
            color: #b6b6b6;
            border-left-width: 8px;
        }

        ul.story-list a.empty-story:hover::after {
            content: "Bientôt disponible";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1rem;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            white-space: nowrap;
            pointer-events: none;
        }

        @media (max-width: 768px) {

            h1,
            h2 {
                font-size: 1rem;
            }

            ul.story-list a {
                font-size: 1rem;
            }

            .logout-btn {
                font-size: 0.8rem;
                padding: 0.4rem 0.8rem;
            }
        }

        #typewriter-h1,
        #typewriter-h2 {
            font-family: 'Press Start 2P', cursive;
            color: #4ffa00;
            text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.7);
            margin-bottom: 1rem;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid #4ffa00;
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const typewriterTexts = [{
                    elementId: 'typewriter-h1',
                    text: 'Bienvenue, {{ auth()->user()->name }}'
                },
                {
                    elementId: 'typewriter-h2',
                    text: 'Choisissez une histoire !'
                }
            ];

            function typeText({
                elementId,
                text
            }, callback) {
                const element = document.getElementById(elementId);
                let index = 0;

                function type() {
                    if (index < text.length) {
                        element.textContent += text.charAt(index);
                        index++;
                        setTimeout(type, 100); //vitesse de l'animation
                    } else if (callback) {
                        callback();
                    }
                }

                type();
            }

            // Lancer l'animation pour le h1, puis pour le h2
            typeText(typewriterTexts[0], () => {
                typeText(typewriterTexts[1]);
            });
        });
    </script>
@endsection

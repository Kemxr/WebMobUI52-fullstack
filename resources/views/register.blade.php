@extends('layouts.vue')

@section('title', 'Register page')

@section('content')
    <div class="auth-wrapper">
        <div class="auth-box">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>Inscription</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Nom" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
    </div>


    <style scoped>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        body {
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
            font-family: 'Press Start 2P', cursive;
            color: #4ffa00;
        }

        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-box {
            background-color: #000;
            border: 2px solid #4ffa00;
            padding: 2rem;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 0 15px #4ffa00;
            text-align: center;
        }

        .auth-box:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 0 25px #4ffa00;
        }

        .auth-box h1 {
            font-family: 'Press Start 2P', cursive;
            font-size: 1.4rem;
            color: #4ffa00;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.8);
        }

        form input {
            display: block;
            width: 100%;
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            background-color: #121212;
            border: 1px solid #4ffa00;
            color: #4ffa00;
            font-family: 'VT323', monospace;
        }

        form input::placeholder {
            color: #acacac;
            font-family: 'Press Start 2P', cursive;
            font-size: 0.7rem;
            opacity: 0.8;
            padding-left: 0.5rem;
        }

        form button {
            width: 100%;
            padding: 0.8rem;
            background-color: #4ffa00;
            color: #000;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            font-family: 'VT323', monospace;
            transition: all 0.3s ease;
        }

        form button:hover {
            background-color: #00cc00;
        }

        .auth-link {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.8rem;
        }

        .auth-link a {
            color: #4ffa00;
            text-decoration: underline;
            font-family: 'VT323', monospace;
            font-size: 1rem;
            line-height: 1.5;
        }

        .alert {
            margin-top: 1rem;
            background-color: #1a1a1a;
            border: 1px solid red;
            padding: 1rem;
            color: red;
            font-family: 'VT323', monospace;
        }

        .alert ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        @media (max-width: 768px) {
            .auth-box h1 {
                font-size: 1.2rem;
            }

            form input {
                font-size: 1rem;
            }

            form button {
                font-size: 1.1rem;
            }

            .auth-link {
                font-size: 0.9rem;
            }
        }
    </style>
@endsection

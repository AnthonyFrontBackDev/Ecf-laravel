@extends('base')

@section('content')
<main>
        <article>
            <section class="container">
                {{-- @foreach ($articles as $article )
                    <article>
                        <div class="bloc">
                            <h1>{{ $article->title }}</h1>
                            <p>{{ $article->content }}</p>
                        </div>
                    </article>
                @endforeach --}}
                <article>
                    <div class="bloc ">
                        <h2>Article 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div class="bloc">
                        <h2>Article 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div class="bloc">
                        <h2>Article 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre4" class="bloc">
                        <h2>Article 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre5" class="bloc">
                        <h2>Article 5</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre6" class="bloc">
                        <h2>Article6</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>
            </section>
        </article>

        <aside>
            <nav class="link_ancre">
                <h3>Article frequemment lus</h3>
                <a href="#ancre4">Article 4</a>
                <a href="#ancre5">Article 5</a>
                <a href="#ancre6">Article 6</a>
            </nav>

            <div class="computer">
                <img src="{{asset('images/computer.jpg')}}" alt="ordinateur">
            </div>

            <div class="computer">
                @if (Auth::user())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Déconnexion</button>
                        </form>
                        
                    @else
                        <a class="Connexion" href="{{ route('login') }}">Me connecter</a>
                        <a class="minscrire" href="{{ route('register') }}">M'inscrire</a>
                    @endif
            </div>
            @if (Auth::user())
                    <div class="aside--bloc">
                        <form action="{{ route('accueil') }}" method="POST">
                            @csrf
                            <table>
                                <tbody>
                                    <th>Publier un article</th>
                                    <tr>
                                        <td>Titre</td>
                                        <td><input type="text" name="title" placeholder="Ex: Lorem ipsum dolor sit amet."></td>
                                    </tr>
                                    <tr>
                                        <td>Texte</td>
                                        <td><input type="text" name="content"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit">Poster l'article</button>
                @endif
        </aside>
    </main>
@endsection

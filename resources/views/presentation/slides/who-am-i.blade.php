@extends('presentation.layout')

@section('content')
    <style>
        .flex-row {
            column-gap: 3rem;
        }
    </style>

    <div>
        <h2>Who Am I?</h2>

        <div class="flex-row">
            <div>
                <ul>
                    <li>I'm Maurizio Bonani from Italy 🇮🇹</li>
                    <li>🚗 🇧🇪 ❤️</li>
                    <li>Senior Full-Stack Software Engineer @ <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY1SJiTZH_S9jh1WfxrFKJ37N6OGOkFr4mCQ&s" alt="FM.CO" width="30" /></li>
                    <li>PHP Developer for almost 15 years, Laravel Developer since v3 (2012)</li>
                    <li>I love to delete code more than I love to write it</li>
                    <li>Interests include Software Engineering 🖥️ Music 🤘🏻 and Sports ⚽</li>
                    <hr>
                    <li>You can find me online in a few places
                        <ul>
                            <li><a href="https://mauricius.dev">https://mauricius.dev</a></li>
                            <li><a href="https://github.com/mauricius">https://github.com/mauricius</a></li>
                            <li><a href="https://twitter.com/MaurizioBonani">https://twitter.com/MaurizioBonani</a></li>
                        </ul>
                    </li>
                </ul>

                <div style="margin-left: 80px">
                {{ Quar::size(150)->generate('https://mauricius.dev') }}
                &nbsp;
                &nbsp;
                {{ Quar::size(150)->generate('https://github.com/mauricius') }}
                &nbsp;
                &nbsp;
                {{ Quar::size(150)->generate('https://twitter.com/MaurizioBonani') }}
                </div>
            </div>
            <div>
                <img src="https://mauriziobonani.com/assets/images/mauri.jpg" alt="" width="300" />
            </div>
        </div>
    </div>
@endsection


@extends('presentation.layout')

@section('content')

    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            column-gap: 3rem;
        }
    </style>

    <div>
        <h1 style="text-align: center">What is <span style="color: #3364a3">htmx</span>?</h1>

        <div class="flex-row">
            <div>
                <ul>
                    <li>14 kb JavaScript library to build user interfaces using the power and simplicity of <b>hypertext</b></li>
                    <li>Created by Carson Gross (a lunatic guy in Montana)</li>
                    <li>Former <span style="color: #3364a3">Intercooler.js</span> (from 2013 to 2020)</li>
                    <li>Extendable</li>
                    <li>Version 2.0.4 (13 December 2024)</li>
                    <li>Backend agnostic &mdash; <b>HOWL stack</b> (HTML On Whatever you Like)</li>
                    <li>As simple as it gets
                        <ul>
                            <li>no dependencies</li>
                            <li>no build step (although you can use it in a bundle)</li>
                            <li>written in plain JavaScript (no TypeScript)</li>
                        </ul>
                    </li>
                </ul>

                {{ Quar::size(150)->generate('https://htmx.org/') }}
            </div>
            <div>
                <img src="{{ asset('images/home.png') }}" alt="" />
            </div>
        </div>
    </div>

@endsection



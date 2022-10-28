@extends('layout.layout_master')
@section('content')
    <div class="bg-gray-50">
        <a href="/quiz">
            <div class="absolute flex h-12 w-12 items-center justify-center rounded-b-xl bg-indigo-200 text-white">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z" />
                </svg>
            </div>
        </a>
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Comece agora!</span>
                <span class="block text-indigo-600">Auto-avaliação de seu perfil empreendedor.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700"
                        href="/quiz/entrepreneurProfileTest/01">Iniciar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:text-center">

        <h2 class="text-lg font-semibold text-indigo-600">Saiba mais!</h2>

        <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Teste de Perfil Empreendedor
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Empreender nos dias de hoje é uma atitude que
            requer muita determinação, propósito e visão. Essas são características que a maioria dos
            empreendedores apresenta, assim como o otimismo, persistência, capacidade de enxergar
            soluções e de liderar equipes, entre outras. Faça o teste e veja seu perfil empreendedor!</p>
    </div>
@stop

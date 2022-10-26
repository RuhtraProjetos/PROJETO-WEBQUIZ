@extends('layout.layout_sign')
@section('content')
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Entre no seu Perfil</h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input name="remember" type="hidden" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label class="sr-only" for="email-address">Email address</label>
                        <input
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="email-address" name="email" type="email" autocomplete="email" required
                            placeholder="Informe seu e-mail">
                    </div>
                    <div>
                        <label class="sr-only" for="password">Password</label>
                        <input
                            class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            id="password" name="password" type="password" autocomplete="current-password" required
                            placeholder="Senha de 6 digitos">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                            id="remember-me" name="remember-me" type="checkbox">
                        <label class="ml-2 block text-sm text-gray-900" for="remember-me">Lembre de mim</label>
                    </div>

                    <div class="text-sm">
                        <a class="font-medium text-indigo-600 hover:text-indigo-500" href="#">Esqueceu sua senha?</a>
                    </div>
                </div>

                <div>
                    <button
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        type="submit">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Entrar
                    </button>
                    <div
                        class="group relative flex w-full justify-center rounded-md border border-transparent mt-2 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <a href="/start">Voltar ao Início</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

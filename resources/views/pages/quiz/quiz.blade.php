@extends('layout.layout_master')
@section('content')
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-lg font-semibold text-indigo-600">Questionário</h2>
                <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Escolha entre os
                    diferentes Questionário</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Veja os diferentes testes para encontrar o perfil
                    ideal para você</p>
            </div>
            <div class="mt-10">
                <dl class="space-y-10 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 md:space-y-0">
                    <a class="group relative flex w-full justify-center rounded-md border border-transparent p-4 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="/quiz/entrepreneurProfileTest">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h89.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM576 272c0-44.2-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80s80-35.8 80-80zM352 477.1c0 19.3 15.6 34.9 34.9 34.9H605.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H445.1c-51.4 0-93.1 41.7-93.1 93.1z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Teste de Perfil Empreendedor
                                </p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Empreender nos dias de hoje é uma atitude que
                                requer muita determinação, propósito e visão. Essas são características que a maioria dos
                                empreendedores apresenta, assim como o otimismo, persistência, capacidade de enxergar
                                soluções e de liderar equipes, entre outras. Faça o teste e veja seu perfil empreendedor!
                            </dd>
                        </div>
                    </a>
                    <a class="group relative flex w-full justify-center rounded-md border border-transparent p-4 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="#">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">No hidden fees</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur
                                adipisicing
                                elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </a>
                    <a class="group relative flex w-full justify-center rounded-md border border-transparent p-4 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="#">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Transfers are instant</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur
                                adipisicing
                                elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </a>
                    <a class="group relative flex w-full justify-center rounded-md border border-transparent p-4 bg-white py-2 px-4 text-sm font-medium text-indigo-600 hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="#">
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>
                                </div>
                                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Mobile notifications</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur
                                adipisicing
                                elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </a>
                </dl>
            </div>
        </div>
    </div>
@stop

<x-app-layout title="Home Page">
    <div class="flex justify-center h-[600px] items-center bg-background">
        <div class="text-center">
            <p class="font-bold md:text-5xl text-3xl text-netral">Selamat Datang di <span class="text-primary">Website
                    E-Vote</span>
                <br>Platform
                Pemilihan
                Digital</span>
            </p>
            <p class="font-medium md:text-lg text-md mt-2 mb-2 md:mb-10 md:mt-5">Setiap Suara yang Diberikan Membawa
                Dampak
                Besar<br>Menentukan Arah
                Masa Depan dan Mewujudkan Perubahan yang Positif.</p>
            <div class="flex justify-center space-x-5">
                <a href=""
                    class="md:px-4 md:py-3 px-2 py-3 bg-primary text-background rounded-lg font-bold text-lg">Mulai
                    Sekarang</a>
                <a href=""
                    class="md:px-4 md:py-3 px-2 py-3 text-netral rounded-lg font-bold text-lg border-2 border-netral hover:bg-netral hover:text-background">Daftar
                    Sekarang</a>
            </div>
        </div>

    </div>

    <div class="p-14 w-full mt-10">
        <div class="">
            <h1 class="text-3xl md:text-4xl text-netral font-semibold text-center">
                Mudah, cepat, dan transparan
            </h1>

            <h3 class="text-lg text-slate-600 text-center md:mt-2">Karena pemilihan seharusnya memudahkan, bukan
                mempersulit.
            </h3>

            <div class="md:flex md:justify-center space-y-10 md:space-y-0 md:space-x-5 mt-10 p-10 ">
                <div class="card w-auto">
                    <div class="image bg-primary rounded-md w-10">
                        <img src="{{ asset('img/vote-svgrepo-com.svg') }}" alt="" class="p-1">
                    </div>
                    <div class="text">
                        <p class="mt-3 text-primary font-medium">Voting</p>
                        <h3 class="mt-3 font-semibold text-xl text-netral">Proses pemilihan aman dan transparan dengan
                            laporan
                            real-time.</h3>
                        <p class="mt-3 text-slate-600 text-md">E-vote aman dan transparan dengan laporan real-time,
                            memastikan
                            keakuratan dan efisiensi
                            untuk semua kebutuhan pemilihan Anda.</p>
                    </div>
                </div>
                <hr class="md:hidden border-1 border-primary">
                <div class="card w-auto">
                    <div class="image bg-primary rounded-md w-10">
                        <img src="{{ asset('img/signature-svgrepo-com.svg') }}" alt="" class="p-1">
                    </div>
                    <div class="text">
                        <p class="mt-3 text-primary font-medium">Petition</p>
                        <h3 class="mt-3 font-semibold text-xl text-netral">Proses petisi aman dan transparan dengan
                            pembaruan langsung.</h3>
                        <p class="mt-3 text-slate-600 text-md">E-vote aman dan transparan dengan laporan real-time,
                            E-petisi efisien dan transparan, mendukung setiap langkah perubahan dengan akurat dan cepat.
                        </p>
                    </div>
                </div>
                <hr class="md:hidden border-1 border-primary">
                <div class="card w-auto">
                    <div class="image bg-primary rounded-md w-10">
                        <img src="{{ asset('img/user-shield-alt-1-svgrepo-com.svg') }}" alt="" class="p-1">
                    </div>
                    <div class="text">
                        <p class="mt-3 text-primary font-medium">Secure</p>
                        <h3 class="mt-3 font-semibold text-xl text-netral">Data Anda terlindungi dengan aman dan
                            transparan.</h3>
                        <p class="mt-3 text-slate-600 text-md">Keamanan data terjamin, menjaga privasi Anda dengan
                            perlindungan terbaik dan akurat.</p>
                    </div>
                </div>
                <hr class="md:hidden border-1 border-primary">
            </div>
        </div>
    </div>

    <div class="w-full h-[400px] flex justify-center items-center"
        style="background-image: url('{{ asset('img/bg.png') }}'); background-size: cover">
        <div class="text-center max-w-md">
            <h1 class=" font-bold text-4xl text-primary">Voting Sekarang</h1>
            <p class="text-xl text-slate-600 mt-5 mb-8">Menggunakan e-vote, Anda dapat memilih calon yang ingin dipilih
                secara
                digital.</p>
            <a href="" class="mt-5 px-5 py-3 bg-primary text-md font-semibold text-white rounded-lg shadow">Mulai
                Sekarang</a>
        </div>
    </div>

    <div class="w-full mt-10">
        <h1 class="text-center text-4xl font-semibold text-primary">Apa Kata Mereka?</h1>
        <p class="text-center text-lg text-slate-600 mt-2 font-medium">Ini adalah beberapa komentar tentang Website ini
        </p>
        <div class="w-full md:flex md:justify-center mt-5 p-5 md:space-x-10">
            <div class="card md:shadow-lg shadow-md p-5">
                <p class="text-lg md:max-w-sm text-netral mb-2">Evote memberikan pengalaman yang sangat mudah dalam
                    melakukan voting online. Sangat membantu dalam berbagai acara atau pemilihan!</p>
                <hr>
                <div class="flex mt-3 space-x-32">
                    <div class="text">
                        <h3 class="font-medium text-netral ">Muhammad Haziq Firdaus</h3>
                        <h4 class="text-slate-400 ">CEO At Mynesium</h4>
                    </div>
                    <div class="image  w-12 h-12 rounded-full p-1 bg-gray-400">
                        <img src="{{ asset('img/user-shield-alt-1-svgrepo-com.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="card md:shadow-lg shadow-md p-5">
                <p class="text-lg md:max-w-sm text-netral mb-2">Evote memberikan pengalaman yang sangat mudah dalam
                    melakukan voting online. Sangat membantu dalam berbagai acara atau pemilihan!</p>
                <hr>
                <div class="flex mt-3 space-x-32">
                    <div class="text">
                        <h3 class="font-medium text-netral ">Muhammad Haziq Firdaus</h3>
                        <h4 class="text-slate-400 ">CEO At Mynesium</h4>
                    </div>
                    <div class="image  w-12 h-12 rounded-full p-1 bg-gray-400">
                        <img src="{{ asset('img/user-shield-alt-1-svgrepo-com.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="card md:shadow-lg shadow-md p-5">
                <p class="text-lg md:max-w-sm text-netral mb-2">Evote memberikan pengalaman yang sangat mudah dalam
                    melakukan voting online. Sangat membantu dalam berbagai acara atau pemilihan!</p>
                <hr>
                <div class="flex mt-3 space-x-32">
                    <div class="text">
                        <h3 class="font-medium text-netral ">Muhammad Haziq Firdaus</h3>
                        <h4 class="text-slate-400 ">CEO At Mynesium</h4>
                    </div>
                    <div class="image  w-12 h-12 rounded-full p-1 bg-gray-400">
                        <img src="{{ asset('img/user-shield-alt-1-svgrepo-com.svg') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

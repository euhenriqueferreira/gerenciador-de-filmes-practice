<a href="filme?id=<?=$filme->id?>" class="rounded-lg bg-gray-700 w-full h-[360px] relative overflow-hidden group/filme">
    <img src="<?=$filme->foto?>" alt="" class="absolute left-0 top-0 w-full h-full object-cover">
    <img src="assets/Shade.png" alt="" class="absolute left-0 top-0 w-full h-full object-cover opacity-90">
    <div class="flex items-center gap-1 absolute right-2 top-2 bg-gray-950/50 px-2 py-1 rounded-full">
        <p class="font-raj text-lg text-gray-300 font-bold">
            <!-- Média -->
            <?=$filme->nota_media?>
        </p>
        <p class="text-xs text-gray-300 font-normal flex gap-1 items-end pb-1">/ 5 
            <svg class="w-5 h-5" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="white"/>
            </svg>
        </p>
    </div>
    <div class="absolute bottom-5 left-5 group-hover/filme:-translate-y-12 transition">    
        <h2 class="font-raj text-xl font-bold text-gray-300"><?=$filme->titulo?></h2>
        <div class="flex items-center gap-2">
            <p class="text-gray-400 text-sm font-bold"><?=$filme->categoria?></p>
            <div class="rounded-full bg-gray-400 w-1 h-1 mt-1"></div>
            <p class="text-gray-400 text-sm font-bold"><?=$filme->ano_de_lancamento?></p>
        </div>
    </div>
    <div class="absolute -bottom-11 left-5 translate-y-0 line-clamp-2 text-ellipsis group-hover/filme:-translate-y-16 transition">
        <p class="text-gray-400 text-sm font-normal"><?=$filme->descricao?></p>
    </div>
</a>
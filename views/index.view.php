<div class="max-w-screen-xl px-10 mx-auto flex items-center justify-between">
    <h1 class="font-rammeto text-gray-300 text-2xl font-normal">Explorar</h1>
    <form>
        <input type="text" name="pesquisar" class="bg-transparent border-2 border-solid border-gray-800 rounded text-gray-400 focus:outline-none px-2 py-1" placeholder="🔍 Pesquisar...">
    </form>
</form>
</div>

<div class="max-w-screen-xl mx-auto px-10 grid grid-cols-4 gap-6 mt-8 max-h-[500px] overflow-y-auto">
    <?php 
        if(count($filmes) > 0):
            foreach ($filmes as $filme): 
    ?>
                <a href="filme?id=<?=$filme->id?>" class="rounded-lg bg-gray-700 w-full h-[360px] relative overflow-hidden group/filme">
                    <img src="<?=$filme->foto?>" alt="" class="absolute left-0 top-0 w-full h-full object-cover">
                    <img src="assets/Shade.png" alt="" class="absolute left-0 top-0 w-full h-full object-cover opacity-90">
                    <div class="flex items-center gap-1 absolute right-2 top-2 bg-gray-950/50 px-2 py-1 rounded-full">
                        <p class="font-raj text-lg text-gray-300 font-bold">
                            <!-- Média -->
                            4,5
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
    <?php
            endforeach;
        else:
    ?>
        <div class="max-w-screen-xl mx-auto px-10 col-span-4 mt-4 flex flex-col items-center">
            <svg class="w-11 h-11" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8749 8.12501H7.97568L16.4062 5.89923C16.486 5.8782 16.5608 5.84158 16.6264 5.79148C16.6919 5.74137 16.7469 5.67878 16.7882 5.60731C16.8295 5.53584 16.8561 5.4569 16.8667 5.37506C16.8773 5.29322 16.8716 5.21009 16.8499 5.13048L16.2124 2.78673C16.1247 2.4714 15.9162 2.20334 15.6323 2.04059C15.3483 1.87784 15.0116 1.83351 14.6952 1.9172L2.79756 5.05782C2.63914 5.09894 2.49052 5.17126 2.3604 5.27052C2.23027 5.36979 2.12126 5.49403 2.03974 5.63595C1.95777 5.77612 1.90481 5.93135 1.88401 6.0924C1.8632 6.25345 1.87499 6.41704 1.91865 6.57345L2.4999 8.71563C2.4999 8.72657 2.4999 8.73829 2.4999 8.75001V15.625C2.4999 15.9565 2.6316 16.2745 2.86602 16.5089C3.10044 16.7433 3.41838 16.875 3.7499 16.875H16.2499C16.5814 16.875 16.8994 16.7433 17.1338 16.5089C17.3682 16.2745 17.4999 15.9565 17.4999 15.625V8.75001C17.4999 8.58425 17.4341 8.42528 17.3168 8.30807C17.1996 8.19086 17.0407 8.12501 16.8749 8.12501ZM15.0124 3.12501L15.4812 4.84923L13.714 5.31798L11.5171 4.04923L15.0124 3.12501ZM9.80224 4.50001L11.9991 5.76876L9.11318 6.53048L6.91631 5.26329L9.80224 4.50001ZM3.59912 7.98595L3.13037 6.26095L5.20068 5.71407L7.39756 6.98438L3.59912 7.98595ZM16.2499 15.625H3.7499V9.37501H16.2499V15.625Z" fill="#7A7B9F"/>
            </svg>
            <p class="text-gray-400 font-nunito font-normal text-base mt-2">Nenhum filme encontrado com "<?=$pesquisa?>"</p>
            <p class="text-gray-400 font-nunito font-normal text-base mt-1">Que tal tentar outra busca?</p>
            <a href="/" class="text-base font-nunito font-normal text-gray-500 flex items-center gap-1 mt-4 p-1">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.067 15.1828C16.1251 15.2409 16.1712 15.3098 16.2026 15.3857C16.234 15.4615 16.2502 15.5429 16.2502 15.625C16.2502 15.7071 16.234 15.7884 16.2026 15.8643C16.1712 15.9402 16.1251 16.0091 16.067 16.0672C16.009 16.1252 15.94 16.1713 15.8642 16.2027C15.7883 16.2342 15.707 16.2503 15.6249 16.2503C15.5427 16.2503 15.4614 16.2342 15.3855 16.2027C15.3097 16.1713 15.2407 16.1252 15.1827 16.0672L9.99986 10.8836L4.81705 16.0672C4.69977 16.1844 4.54071 16.2503 4.37486 16.2503C4.20901 16.2503 4.04995 16.1844 3.93267 16.0672C3.8154 15.9499 3.74951 15.7908 3.74951 15.625C3.74951 15.4591 3.8154 15.3001 3.93267 15.1828L9.11627 9.99998L3.93267 4.81717C3.8154 4.69989 3.74951 4.54083 3.74951 4.37498C3.74951 4.20913 3.8154 4.05007 3.93267 3.93279C4.04995 3.81552 4.20901 3.74963 4.37486 3.74963C4.54071 3.74963 4.69977 3.81552 4.81705 3.93279L9.99986 9.11639L15.1827 3.93279C15.2999 3.81552 15.459 3.74963 15.6249 3.74963C15.7907 3.74963 15.9498 3.81552 16.067 3.93279C16.1843 4.05007 16.2502 4.20913 16.2502 4.37498C16.2502 4.54083 16.1843 4.69989 16.067 4.81717L10.8835 9.99998L16.067 15.1828Z" fill="#7A7B9F"/>
                </svg>
                Limpar filtro
            </a>
        </div>

    <?php
        endif;
    ?>

</div>
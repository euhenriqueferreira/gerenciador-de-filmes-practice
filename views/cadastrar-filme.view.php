
<?php if($sucesso = flashMessage()->get('sucesso')):?>
    <div class="mb-5 w-full max-w-screen-lg mx-auto bg-green-700/50 border-2 border-green-700 text-green-500 text-sm rounded-md p-1 mt-3"><?=$sucesso?></div>
<?php endif; flashMessage()->unset('sucesso');?>

<form action="" class="max-w-screen-lg mx-auto flex gap-12" method="post" enctype="multipart/form-data">
    <div class="w-2/5 bg-gray-900 rounded-lg h-500px flex flex-col items-center justify-center hover:bg-gray-800 transition">
        <label for="foto" class="flex flex-col items-center justify-center w-full h-full gap-3 cursor-pointer">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 22.5V32.5C35 32.8315 34.8683 33.1495 34.6339 33.3839C34.3995 33.6183 34.0815 33.75 33.75 33.75H6.25C5.91848 33.75 5.60054 33.6183 5.36612 33.3839C5.1317 33.1495 5 32.8315 5 32.5V22.5C5 22.1685 5.1317 21.8505 5.36612 21.6161C5.60054 21.3817 5.91848 21.25 6.25 21.25C6.58152 21.25 6.89946 21.3817 7.13388 21.6161C7.3683 21.8505 7.5 22.1685 7.5 22.5V31.25H32.5V22.5C32.5 22.1685 32.6317 21.8505 32.8661 21.6161C33.1005 21.3817 33.4185 21.25 33.75 21.25C34.0815 21.25 34.3995 21.3817 34.6339 21.6161C34.8683 21.8505 35 22.1685 35 22.5ZM14.6344 12.1344L18.75 8.01719V22.5C18.75 22.8315 18.8817 23.1495 19.1161 23.3839C19.3505 23.6183 19.6685 23.75 20 23.75C20.3315 23.75 20.6495 23.6183 20.8839 23.3839C21.1183 23.1495 21.25 22.8315 21.25 22.5V8.01719L25.3656 12.1344C25.6002 12.3689 25.9183 12.5007 26.25 12.5007C26.5817 12.5007 26.8998 12.3689 27.1344 12.1344C27.3689 11.8998 27.5007 11.5817 27.5007 11.25C27.5007 10.9183 27.3689 10.6002 27.1344 10.3656L20.8844 4.11563C20.7683 3.99941 20.6304 3.90721 20.4787 3.84431C20.3269 3.7814 20.1643 3.74902 20 3.74902C19.8357 3.74902 19.6731 3.7814 19.5213 3.84431C19.3696 3.90721 19.2317 3.99941 19.1156 4.11563L12.8656 10.3656C12.6311 10.6002 12.4993 10.9183 12.4993 11.25C12.4993 11.5817 12.6311 11.8998 12.8656 12.1344C13.1002 12.3689 13.4183 12.5007 13.75 12.5007C14.0817 12.5007 14.3998 12.3689 14.6344 12.1344Z" fill="#A85FDD"/>
            </svg>
            <p>Fazer upload</p>

            <?php 
                // dd($_SESSION);
                    $flash = flashMessage()->get('validacoes_cadastrar_filme');
                    if($flash && isset($flash['foto'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['foto'][0]?></div>
                <?php endif;?>
        </label>
        <input type="file" name="foto" id="foto" class="hidden">
    </div>
    <div class="w-3/5">
        <h1 class="font-raj text-xl font-bold text-gray-300 mb-6">Novo filme</h1>
    
        <div class="flex flex-wrap justify-between gap-2">
            <div class="flex h-12 border-2 border-gray-900 rounded-md px-4 w-full">
                <label for="email" class="flex items-center justify-center mr-2">
                    <svg class="w-5 h-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.8749 8.12501H7.97568L16.4062 5.89923C16.486 5.8782 16.5608 5.84158 16.6264 5.79148C16.6919 5.74137 16.7469 5.67878 16.7882 5.60731C16.8295 5.53584 16.8561 5.4569 16.8667 5.37506C16.8773 5.29322 16.8716 5.21009 16.8499 5.13048L16.2124 2.78673C16.1247 2.4714 15.9162 2.20334 15.6323 2.04059C15.3483 1.87784 15.0116 1.83351 14.6952 1.9172L2.79756 5.05782C2.63914 5.09894 2.49052 5.17126 2.3604 5.27052C2.23027 5.36979 2.12126 5.49403 2.03974 5.63595C1.95777 5.77612 1.90481 5.93135 1.88401 6.0924C1.8632 6.25345 1.87499 6.41704 1.91865 6.57345L2.4999 8.71563C2.4999 8.72657 2.4999 8.73829 2.4999 8.75001V15.625C2.4999 15.9565 2.6316 16.2745 2.86602 16.5089C3.10044 16.7433 3.41838 16.875 3.7499 16.875H16.2499C16.5814 16.875 16.8994 16.7433 17.1338 16.5089C17.3682 16.2745 17.4999 15.9565 17.4999 15.625V8.75001C17.4999 8.58425 17.4341 8.42528 17.3168 8.30807C17.1996 8.19086 17.0407 8.12501 16.8749 8.12501ZM15.0124 3.12501L15.4812 4.84923L13.714 5.31798L11.5171 4.04923L15.0124 3.12501ZM9.80224 4.50001L11.9991 5.76876L9.11318 6.53048L6.91631 5.26329L9.80224 4.50001ZM3.59912 7.98595L3.13037 6.26095L5.20068 5.71407L7.39756 6.98438L3.59912 7.98595ZM16.2499 15.625H3.7499V9.37501H16.2499V15.625Z" fill="#7A7B9F"/>
                    </svg>
                </label>
                <input type="text" id="titulo" name="titulo" class="bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Título">
            </div>
            <?php 
                // dd($_SESSION);
                    $flash = flashMessage()->get('validacoes_cadastrar_filme');
                    if($flash && isset($flash['titulo'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['titulo'][0]?></div>
                <?php endif;?>

            <div class="flex h-12 border-2 border-gray-900 rounded-md px-4 mt-3 w-full">
                <label for="email" class="flex items-center justify-center mr-2">
                    <svg class="w-5 h-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.25 2.5H14.375V1.875C14.375 1.70924 14.3092 1.55027 14.1919 1.43306C14.0747 1.31585 13.9158 1.25 13.75 1.25C13.5842 1.25 13.4253 1.31585 13.3081 1.43306C13.1908 1.55027 13.125 1.70924 13.125 1.875V2.5H6.875V1.875C6.875 1.70924 6.80915 1.55027 6.69194 1.43306C6.57473 1.31585 6.41576 1.25 6.25 1.25C6.08424 1.25 5.92527 1.31585 5.80806 1.43306C5.69085 1.55027 5.625 1.70924 5.625 1.875V2.5H3.75C3.41848 2.5 3.10054 2.6317 2.86612 2.86612C2.6317 3.10054 2.5 3.41848 2.5 3.75V16.25C2.5 16.5815 2.6317 16.8995 2.86612 17.1339C3.10054 17.3683 3.41848 17.5 3.75 17.5H16.25C16.5815 17.5 16.8995 17.3683 17.1339 17.1339C17.3683 16.8995 17.5 16.5815 17.5 16.25V3.75C17.5 3.41848 17.3683 3.10054 17.1339 2.86612C16.8995 2.6317 16.5815 2.5 16.25 2.5ZM5.625 3.75V4.375C5.625 4.54076 5.69085 4.69973 5.80806 4.81694C5.92527 4.93415 6.08424 5 6.25 5C6.41576 5 6.57473 4.93415 6.69194 4.81694C6.80915 4.69973 6.875 4.54076 6.875 4.375V3.75H13.125V4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694C13.4253 4.93415 13.5842 5 13.75 5C13.9158 5 14.0747 4.93415 14.1919 4.81694C14.3092 4.69973 14.375 4.54076 14.375 4.375V3.75H16.25V6.25H3.75V3.75H5.625ZM16.25 16.25H3.75V7.5H16.25V16.25Z" fill="#7A7B9F"/>
                    </svg>
                </label>
                <select id="ano_de_lancamento" name="ano_de_lancamento" class="w-full bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none">
                    <option value="" selected hidden>Escolha uma data</option>
                    <?php foreach (range(1800, date('Y')) as $ano): ?>
                        <option value="<?=$ano?>"><?=$ano?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php 
                // dd($_SESSION);
                    $flash = flashMessage()->get('validacoes_cadastrar_filme');
                    if($flash && isset($flash['ano_de_lancamento'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['ano_de_lancamento'][0]?></div>
                <?php endif;?>

            <div class="flex h-12 border-2 border-gray-900 rounded-md px-4 mt-3 w-full">
                <label for="email" class="flex items-center justify-center mr-2">
                    <svg class="w-5 h-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.0086 10.625L11.25 2.86641C11.1344 2.74983 10.9967 2.65741 10.845 2.59451C10.6933 2.5316 10.5306 2.49948 10.3664 2.50001H3.12501C2.95925 2.50001 2.80027 2.56585 2.68306 2.68306C2.56585 2.80027 2.50001 2.95925 2.50001 3.12501V10.3664C2.49948 10.5306 2.5316 10.6933 2.59451 10.845C2.65741 10.9967 2.74983 11.1344 2.86641 11.25L10.625 19.0086C10.7411 19.1247 10.8789 19.2168 11.0306 19.2796C11.1822 19.3425 11.3448 19.3748 11.509 19.3748C11.6732 19.3748 11.8357 19.3425 11.9874 19.2796C12.1391 19.2168 12.2769 19.1247 12.393 19.0086L19.0086 12.393C19.1247 12.2769 19.2168 12.1391 19.2796 11.9874C19.3425 11.8357 19.3748 11.6732 19.3748 11.509C19.3748 11.3448 19.3425 11.1822 19.2796 11.0306C19.2168 10.8789 19.1247 10.7411 19.0086 10.625ZM11.5086 18.125L3.75001 10.3664V3.75001H10.3664L18.125 11.5086L11.5086 18.125ZM7.50001 6.56251C7.50001 6.74793 7.44502 6.92918 7.34201 7.08335C7.239 7.23752 7.09258 7.35769 6.92127 7.42864C6.74997 7.4996 6.56147 7.51817 6.37961 7.48199C6.19775 7.44582 6.03071 7.35653 5.89959 7.22542C5.76848 7.09431 5.67919 6.92726 5.64302 6.7454C5.60685 6.56355 5.62541 6.37505 5.69637 6.20374C5.76733 6.03243 5.88749 5.88602 6.04166 5.783C6.19583 5.67999 6.37709 5.62501 6.56251 5.62501C6.81115 5.62501 7.0496 5.72378 7.22542 5.89959C7.40123 6.07541 7.50001 6.31387 7.50001 6.56251Z" fill="#7A7B9F"/>
                    </svg>
                </label>
                <input type="text" id="categoria" name="categoria" class="bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Categoria">
            </div>
            <?php 
                // dd($_SESSION);
                    $flash = flashMessage()->get('validacoes_cadastrar_filme');
                    if($flash && isset($flash['categoria'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['categoria'][0]?></div>
                <?php endif;?>
            

            <textarea type="text" id="descricao" name="descricao" class="min-h-48 rounded-md w-full mt-3 border-2 border-gray-900 p-3 pl-4 bg-transparent text-base font-nunito font-normal text-gray-400 focus:outline-none placeholder:opacity-55" placeholder="Descrição"></textarea>
            <?php 
                // dd($_SESSION);
                    $flash = flashMessage()->get('validacoes_cadastrar_filme');
                    if($flash && isset($flash['descricao'])):
                ?>
                        <div class="text-rose-500 text-xs mt-px"><?=$flash['descricao'][0]?></div>
                <?php endif; flashMessage()->unset('validacoes_cadastrar_filme');?>
            <div class="flex items-center gap-8 mt-16 w-full justify-end">
                <a href="/meus-filmes" class="py-1 font-nunito font-normal">Cancelar</a>
                <button type="submit" class="bg-violet-600 rounded-md px-6 h-12 text-gray-100 font-nunito font-normal flex items-center justify-center hover:bg-violet-700 transition">Salvar</button>
            </div>
        </div>
    </div>
</form>

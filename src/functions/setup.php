<?php
/**
 * Setup Theme
 */

if(!function_exists('tainacan_setup')) {

    /**
     * Execulta após o tema ser inicializado. 
     * Isso é usado para a configuração básica do tema, registro dos recursos do tema e init hooks. 
     * Observe que esta função está conectada ao gancho after_setup_theme, que é executado antes do gancho de init.
     */
    function tainacan_setup() {
        /**
        * Não exibe o menu do administrador na pagina do site. Mesmo quando estiver logado!
        **/
        show_admin_bar( false );

        /**
         * Desabilita o FTP na instalação de Plugins
         */
        define('FS_METHOD', 'direct');
    }

}
add_action( 'after_setup_theme', 'tainacan_setup' );
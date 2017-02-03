<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Array of settings
 */
return array(
    'Informações' => array(
        'title' => __(
            '<div style="background: #ffffff; border: none; border-radius: 5px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1)">
                        <div style="padding:15px;text-align: center; vertical-align:bottom;">
                            <a href="http://www.freterapido.com" target="_blank">
                                <img src="https://freterapido.com/imgs/frete_rapido.png" style="margin: auto"/>
                            </a>
                            <div style="padding-top: 20px;">
                                Configure abaixo a sua conta com os dados da loja para obter as cotações de frete através do Frete Rápido.
                                </br>
                                O token e as configurações dos Correios estão disponíveis no seu 
                                <a href="https://freterapido.com/painel/" target="_blank">Painel administrativo</a>.
                                </br>
                                Em caso de dúvidas, reporte de bugs ou sugestão de melhorias, acesse a 
                                <a href="https://github.com/freterapido/freterapido_woocommerce" target="_blank">documentação deste módulo no Github</a>.
                                </br>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>',
            'freterapido'
        ),
        'type' => 'title'
    ),
    'enabled' => array(
        'title' => __('Enable/Disable', 'freterapido'),
        'type' => 'checkbox',
        'label' => __('Enable', 'freterapido'),
        'default' => 'yes'
    ),
    'cnpj' => array(
        'title' => 'CNPJ',
        'type' => 'text',
        'description' => __('CNPJ from your store', 'freterapido'),
        'desc_tip' => true
    ),
    'results' => array(
        'title' => __('Results', 'freterapido'),
        'type' => 'select',
        'options' => array('0' => 'Sem filtro (todas as ofertas)', '1' => 'Somente oferta com menor preço', '2' => 'Retornar somente a oferta com menor prazo de entrega'),
        'label' => __('Activated', 'freterapido'),
        'description' => __('How would you like to receive the results?', 'freterapido'),
        'desc_tip' => true,
        'default' => 0
    ),
    'limit' => array(
        'title' => __('Limit', 'freterapido'),
        'type' => 'select',
        'options' => array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10',
            '11' => '11',
            '12' => '12',
            '13' => '13',
            '14' => '14',
            '15' => '15',
            '16' => '16',
            '17' => '17',
            '18' => '18',
            '19' => '19',
            '20' => '20',
        ),
        'description' => __('Choose a result limit', 'freterapido'),
        'desc_tip' => true,
        'default' => 'yes'
    ),
    'additional_time' => array(
        'title' => __('Additional Delivery period / post (days)', 'freterapido'),
        'type' => 'text',
        'description' => __('Will be added within the freight deadline', 'freterapido'),
        'desc_tip' => true,
        'default' => '0',
        'placeholder' => '0'
    ),
    'additional_price' => array(
        'title' => __('Additional cost of sending / posting (R$)', 'freterapido'),
        'type' => 'text',
        'description' => __('Will be added in the freight value', 'freterapido'),
        'desc_tip' => true,
        'default' => '2'
    ),
    'token' => array(
        'title' => __('Token', 'freterapido'),
        'type' => 'text',
        'description' => __('Integration Token with Frete Rápido', 'freterapido'),
        'desc_tip' => true
    )
);
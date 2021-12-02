<?php

return [
    'common' => [
        'actions' => 'Ações',
        'create' => 'Salvar',
        'edit' => 'Editar',
        'update' => 'Atualizar',
        'new' => 'Novo',
        'cancel' => 'Cancelar',
        'save' => 'Salvar',
        'delete' => 'Deletar',
        'delete_selected' => 'Deletar selecionado',
        'search' => 'Pesquisar...',
        'back' => 'Voltar',
        'are_you_sure' => 'Tem certeza?',
        'no_items_found' => 'Nenhum registro encontrado',
        'created' => 'Registro criado com sucesso',
        'saved' => 'Registro salvo com sucesso',
        'removed' => 'Removido com sucesso',
    ],

    'clients' => [
        'name' => 'Clientes',
        'index_title' => 'Lista de clientes',
        'new_title' => 'Novo cliente',
        'create_title' => 'Registrar Cliente',
        'edit_title' => 'Editar Cliente',
        'show_title' => 'Mostrar Cliente',
        'inputs' => [
            'type_client' => 'Tipo de cliente',
            'name' => 'Nome',
            'partner_id' => 'Parceiro',
            'email' => 'E-mail',
            'phone' => 'Telefone',
            'mobile' => 'Celular',
            'street' => 'Logradouro',
            'number' => 'Número',
            'complement' => 'Complemento',
            'neighborhood' => 'Bairro',
            'city' => 'Cidade',
            'state' => 'Estado',
            'zip_code' => 'CEP',
            'country' => 'País',
            'whatsapp' => 'Whatsapp',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',


        ],
    ],

    'offices' => [
        'name' => 'Offices',
        'index_title' => 'Offices List',
        'new_title' => 'New Office',
        'create_title' => 'Create Office',
        'edit_title' => 'Edit Office',
        'show_title' => 'Show Office',
        'inputs' => [
            'name' => 'Name',
            'user_id' => 'User',
        ],
    ],

    'partners' => [
        'name' => 'Partners',
        'index_title' => 'Partners List',
        'new_title' => 'New Partner',
        'create_title' => 'Create Partner',
        'edit_title' => 'Edit Partner',
        'show_title' => 'Show Partner',
        'inputs' => [
            'office_id' => 'Office',
            'name' => 'Name',
            'realtor_id' => 'Realtor',
            'user_id' => 'User',
        ],
    ],

    'properties' => [
        'name' => 'Imóveis',
        'index_title' => 'Lista de imóveis',
        'new_title' => 'Novo imóvel',
        'create_title' => 'Registrar imóvel',
        'edit_title' => 'Editar imóvel',
        'show_title' => 'Mostrar imóvel',
        'inputs' => [
            'office_id' => 'Franquia',
            'realtor_id' => 'Corretor',
            'name' => 'Nome',
            'photo' => 'Foto',
            'description' => 'Descrição',
            'price' => 'Preço',
            'address' => 'Endereço',
            'city' => 'Cidade',
        ],
    ],

    'realtors' => [
        'name' => 'Corretor',
        'index_title' => 'Realtors List',
        'new_title' => 'New Realtor',
        'create_title' => 'Create Realtor',
        'edit_title' => 'Edit Realtor',
        'show_title' => 'Show Realtor',
        'inputs' => [
            'office_id' => 'Office',
            'name' => 'Name',
            'user_id' => 'User',
        ],
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'photo' => 'Photo',
        ],
    ],

    'office_all_properties' => [
        'name' => 'Office All Properties',
        'index_title' => 'AllProperties List',
        'new_title' => 'New Properties',
        'create_title' => 'Create Properties',
        'edit_title' => 'Edit Properties',
        'show_title' => 'Show Properties',
        'inputs' => [
            'name' => 'Name',
            'realtor_id' => 'Realtor',
            'photo' => 'Photo',
        ],
    ],
];

<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'clients' => [
        'name' => 'Clients',
        'index_title' => 'Clients List',
        'new_title' => 'New Client',
        'create_title' => 'Create Client',
        'edit_title' => 'Edit Client',
        'show_title' => 'Show Client',
        'inputs' => [
            'name' => 'Name',
            'partner_id' => 'Partner',
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

    'all_properties' => [
        'name' => 'All Properties',
        'index_title' => 'AllProperties List',
        'new_title' => 'New Properties',
        'create_title' => 'Create Properties',
        'edit_title' => 'Edit Properties',
        'show_title' => 'Show Properties',
        'inputs' => [
            'office_id' => 'Office',
            'realtor_id' => 'Realtor',
            'name' => 'Name',
            'photo' => 'Photo',
        ],
    ],

    'realtors' => [
        'name' => 'Realtors',
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

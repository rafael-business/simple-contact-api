    <head>
        <title>{{ env('APP_TITLE') }}</title>
        <style>
            * {
                box-sizing: border-box;
            }
            a {
                text-decoration: none;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial;
            }

            .container {
                max-width: 1200px;
                margin: 64px auto;
            }

            .header, .header nav ul {
                display: flex;
            }

            .header div.title, .header nav {
                flex: 1;
            }

            .header nav ul {
                list-style: none;
                justify-content: flex-end;
            }

            .header nav ul li a {
                display: block;
                padding: 12px;
                margin: 0 12px;
                border-bottom: 2px solid transparent;
            }

            .header nav ul li a:hover {
                border-bottom: 2px solid lightgray;
            }

            table, td, th {
              border: 1px solid black;
              padding: 6px 12px;
              text-align: left;
            }

            table {
              width: 100%;
              border-collapse: collapse;
            }

            .notification div {
                width: 100%;
                color: white;
                font-weight: 600;
                padding: 12px 24px;
                border-radius: 3px;
                margin-bottom: 12px;
            }

            .notification .success {
                background: green;
            }

            .notification .updated {
                background: orange;
            }

            .notification .destroy {
                background: red;
            }

            .notification .error {
                background-color: black;
                color: red;
            }

            .contact {
                display: flex;
            }

            .contact .dados {
                flex: 2;
            }

            .contact .actions {
                flex: 1;
                padding-top: 12px;
            }

            .contact .actions a {
                display: block;
                padding: 12px 24px;
                border-style: solid;
                border-width: 1px;
                margin: 6px 0 12px 12px;
                border-radius: 6px;
            }

            .contact .actions .excluir {
                color: red;
                border-color: red;
            }

            .contact .actions .excluir:hover {
                color: white;
                background-color: red;
            }

            .field {
                border-bottom: 1px solid lightgray;
                padding-bottom: 24px;
                margin-bottom: 24px;
            }

            .field label {
                font-weight: 600;
            }

            .field input {
                width: 100%;
                font-size: 16px;
                padding: 6px 8px;
                margin-top: 4px;
            }

            form .btn {
                float: right;
                padding: 12px 24px;
                color: white;
                cursor: pointer;
                border-radius: 6px;
            }

            form .btn.btn_salvar {
                background-color: green;
                border: 1px solid green;
            }

            form .btn.btn_salvar:hover {
                background-color: lightgreen;
                color: green;
            }

            form .btn.btn_excluir {
                background-color: red;
                border: 1px solid red;
            }

            form .btn.btn_excluir:hover {
                background-color: rgba(255,0,0,.2);
                color: red;
            }
        </style>
    </head>
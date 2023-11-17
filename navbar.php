<?php

    echo"
        <nav class='navbar navbar-expand-lg bg-body-tertiary py-1 '>
            <div class='container-fluid '>
            <a class='navbar-brand btn btn-dark border border-warning p-1' href='index.php'><span class='text-warning fw-bold'>CABELEIREIRO</span></a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'
                aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse ' id='navbarSupportedContent'>
                <ul class='navbar-nav  me-auto mb-2 mb-lg-0'>
                    <li class='nav-item'>
                        <a class='nav-link active fs-5 fw-bold' aria-current='page' href='index.php'>INICIO</a>
                    </li>
                    <li class='nav-item'>
                        <div class='dropdown '>
                            <button class='btn btn-light fs-5 fw-bold dropdown-toggle' type='button'  data-bs-toggle='dropdown' aria-expanded='true'>
                                SOBRE NÓS
                            </button>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='sobre.php'>Quem somos</a></li>
                                <li><a class='dropdown-item' href='contato.php'>Contato</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active fs-5 fw-bold' href='servicos.php'>SERVIÇOS</a>
                    </li>
                    <li class='nav-item'>
                        <div class='dropdown '>
                            <button class='btn btn-light fs-5 fw-bold dropdown-toggle' type='button'  data-bs-toggle='dropdown' aria-expanded='true'>
                                <span class='text-primary'>C</span><span class='text-danger'>R</span><span class='text-warning'>U</span><span class='text-success'>D</span>
                                <small>(controle de tabelas)</small>
                                </button>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='CRUD_S.php'>SERVIÇOS</a></li>
                                <li><a class='dropdown-item' href='CRUD_A.php'>AGENDAMENTO</a></li>
                                <li><a class='dropdown-item' href='CRUD_COL.php'>COLABORADORES</a></li>
                                <li><a class='dropdown-item' href='CRUD_CON.php'>CONTABILIDADE</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class='navbar-nav  mb-2 '>
                    <audio src='Gal Costa - Cabelo (Clip).mp3' id='audio-player' class='me-4' controls autoplay loop muted></audio> 
                </ul>
            </div>
        </div>
    </nav>";

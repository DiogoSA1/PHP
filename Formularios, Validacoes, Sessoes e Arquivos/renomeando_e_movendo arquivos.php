<?php

// rename() => função renomeia arquivo ou move o arquivo de pasta
rename('texto2.txt', 'texto20.txt');
rename('texto2.txt', 'pasta_teste/texto20.txt');

// copy() => função faz cópia do arquivo
copy('pasta_teste/texto20', 'texto_copiado');
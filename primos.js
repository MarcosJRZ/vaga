function primeNumbers(inicial, final) {
    /* tenta passar para inteiro e verifica se é inteiro */
    if (Number.isInteger(parseInt(inicial)) && Number.isInteger(parseInt(final))) {
        /* iniciando o array vazio */
        let primos = [];
        /* verificando se o valor inicial é menor que o inicial */
        if (inicial < final) {
            /* definindo que o valor incial não vai ser incluido */
            inicial = parseInt(inicial) + 1
                /* loop que será feito entre o inicial e o final */
            for (i = inicial; i < final; i++) {
                /* função feita separadamente que verifica se é primo e retorna booleano */
                if (isPrimo(i)) {
                    /* adiciona o valor que retornar true no array */
                    primos.push(i);
                }
            };
            /* se a contagem do array for maior que 0 */
            if (primos.length > 0) {
                /* retorna os primos */
                return primos;
            } else {
                /* retorna aviso que não foi encontrado */
                return (alert('Nenhum numero primo encontrado!'))
            };
            /* se o valor inicial for maior que o final */
        } else {
            alert('valor inicial é maior do que o valor final!')
        };
        /* se p valor não for um inteiro */
    } else {
        alert('O valor inserido é inválido!')
    };
};
/* FUNÇÃO AUXILIAR */
function isPrimo(numAtual) {
    /* faz um for para verificar o resto da divisao */
    for (i = 2; i < numAtual; i++)
    /* se for identica a 0 */
        if (numAtual % i === 0) {
            /* retorna false */
            return false
        };
        /* se o numero atual for maior que 1 retorna true*/
    return numAtual > 1;
}
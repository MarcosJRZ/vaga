function sorteador() {
    /* criação do array de sorteados */
    let sorteados = []
        /* loop para montar o array aleatório */
    for (let i = 1; i < 21; i++) {
        /* definindo que deve ser inteiro e aleatório entre 1 e 10 */
        sorteados.push(Math.floor(Math.random() * 10 + 1));
    };
    /* criação do array de não repitidos */
    let naoRepitidos = []
        /* loop que vai percorrer o array aleatorio */
    for (i = 0; i < 20; i++) {
        /* variavel que vai receber cada index do array sorteados */
        let valorAtual = sorteados.splice(0, 1)
            /* se o index atual for undefined é por que não se repete */
        if (sorteados.find(element => element == valorAtual) === undefined) {
            /* adiciona no array de não repetidos */
            naoRepitidos.push(valorAtual[0])
        } else {
            /* adiciona no array de sorteados */
            sorteados.push(valorAtual[0])
        }
    };
    /* retorna o array de não repitidos*/
    return naoRepitidos;
};
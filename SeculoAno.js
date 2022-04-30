function SeculoAno(ano) {
    if (ano >= 0) {
        /* se o resto da divisão por 100 for diferente de 0 */
        if (ano % 100 != 0) {
            /* transformar o valor float em inteiro e somar 1 */
            seculo = parseInt(ano / 100 + 1);
            return seculo;
        }
        /* se o resto da divisão por 100 for igual a 0 */
        else if (ano % 100 == 0) {
            /* dividir o século por 100 */
            seculo = ano / 100;
            return seculo;
        }
        /* se não entrar em nenuma condição aconteceu algum erro */
        else {
            alert('Algo deu errado!');
        };
    }
    /* se o input estiver vazio ou invalido */
    else {
        return (alert('Insira um ano positivo/válido!'))
    };
};
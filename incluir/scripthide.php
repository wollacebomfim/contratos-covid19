<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
        //aqui eu pego todos os radios da pagina com o name igual a 'pergunta', 
        //uso uma constante, ou seja, o "endereço" desse group não vai mudar
        const groupRadio = document.querySelectorAll('input[name=formulario]');
        //a mesma coisa que o grupo de radios, mas com as perguntas em forma
        //de select
        const groupQuestion = document.querySelectorAll('[id^="pergunta"]');
        //aqui eu itero por todos os radios que eu peguei antes,
        //e então adiciono um eventlistener pra ficar ouvindo a
        //cada mudança que eu fizer neles, ou seja, mudar de opção,
        //chamando a função showQuestion 
        for (let i = 0; i < groupRadio.length; i++) {
            groupRadio[i].addEventListener('change', showQuestion);
        }
        function showQuestion() {
            //eu preciso que essas duas variáveis estejam dentro da função
            //porque elas precisam pegar de novo o valor toda vez que eu
            //mudar o radio selecionado

            //pego nessa variavel apenas o radio selecionado, que não pode ser const
            //afinal pode haver mudança
            
            let radioChecked = document.querySelector('input[name=formulario]:checked').id;

            //aqui eu pego a div que eu quero pelo id dela, que deriva do 'prefixo',
            //#pergunta + o valor do radio que foi selecionado
            let questionSelected = document.querySelector('#pergunta-' + radioChecked);

            for (let i = 0; i < groupRadio.length; i++) {
                groupQuestion[i].classList.add('hide');
            }
            questionSelected.classList.remove('hide');
        }
</script>
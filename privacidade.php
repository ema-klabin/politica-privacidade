<?php

/**
 * Plugin Name: Política de Privacidade da Casa Museu Ema Klabin
 * Version:     1.0
 * Text Domain: ek
 */
add_action('wp_enqueue_scripts', 'ek_politica_privacidade_styles');
function ek_politica_privacidade_styles()
{
    $styles = plugin_dir_url(__FILE__) . 'styles.css';
    $version = ek_politica_privacidade_plugin_info()['Version'];
    global $post;
    if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'politica_privacidade')) {
        wp_enqueue_style('ek_politica_privacidade_shortcode', $styles, array(), $version);
    }
}


add_shortcode('politica_privacidade', 'ek_politica_privacidade');
function ek_politica_privacidade($atts)
{
    ob_start();
?>
    ​<article class="privacidade">
        <section id="politica">
            <h1>Política de privacidade</h1>

            <p> <b>A FUNDAÇÃO CULTURAL EMA GORDON KLABIN</b> (a “Casa Museu Ema Klabin” ou “Nós”) entende a importância
                do
                dever
                de
                respeitar a privacidade e segurança das informações de seus usuários (“Usuários” ou “Vocês”), que
                utilizam o
                Site da Casa Museu Ema Klabin. Por isso, o uso de tais informações é realizado em conformidade com os
                regulamentos nacionais de proteção de dados, inclusive a Lei Geral de Proteção de Dados <a href="http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm" target="_blank"> (Lei nº 13.709/2018
                </a>
                -
                “LGPD”). </p>

            <p> <b> PEDIMOS QUE LEIA COM ATENÇÃO ESTA POLÍTICA DE PRIVACIDADE (“POLÍTICA”). ELA DESCREVE COMO SÃO
                    TRATADAS
                    AS
                    INFORMAÇÕES FORNECIDAS POR VOCÊ AO ACESSAR E UTILIZAR O SITE. CASO VOCÊ NÃO CONCORDE COM OS TERMOS E
                    CONDIÇÕES ABAIXO, VOCÊ NÃO DEVE UTILIZAR O NOSSO SITE. </b> </p>

            <p>Após a leitura desta Política, Você poderá entrar em contato para sanar qualquer dúvida ou exercer
                direitos
                relacionados aos seus dados pessoais. Para isso, basta contatar nosso <b>Encarregado (DPO)</b> pelo
                e-mail
                <a href="mailto:privacidade@emaklabin.org.br">privacidade@emaklabin.org.br</a>.
            </p>
            <p>
                Para facilitar a sua leitura, elaboramos o quadro abaixo com um breve resumo dos principais pontos
                abordados
                nesta Política:
            </p>

            <table class="tabela">
                <tr>
                    <th class="titulo">Agente de tratamento</th>
                    <td class="conteudo"><b>FUNDAÇÃO CULTURAL EMA GORDON KLABIN</b>
                        CNPJ/ME: 51.204.196/0001-77<br>
                        Endereço: Rua Portugal, 43, Jardim Europa<br>
                        CEP 01446-020 - São Paulo - SP<br>
                        Encarregado (DPO): Henrique Godinho Lopes Costa
                    </td>
                </tr>
                <tr>
                    <th class="titulo">Natureza opcional de concessão dos dados pessoais</th>
                    <td class="conteudo">Você é livre para fornecer ou não os seus dados pessoais e, mesmo assim,
                        continuar
                        navegando no Site. Porém, a não concessão dos dados pessoais poderá inviabilizar o acesso a
                        alguns
                        serviços oferecidos pelo Site. <a href="#natureza-opcional">[Ver mais...]</a>
                    </td>
                </tr>
                <tr>
                    <th class="titulo">Tipos de dados pessoais processados</th>
                    <td class="conteudo">Dados pessoais fornecidos diretamente por Você ou coletados de forma
                        automática. <a href="#tipo-dados">[Ver
                            mais...]</a></td>
                </tr>
                <tr class="comunicacao">
                    <th class="titulo">Comunicação</th>
                    <td class="conteudo">Envio de comunicação por parte da Fundação Ema Klabin a Você, inclusive
                        informativos. É
                        possível o descadastramento a qualquer momento. <a href="#comunicacao">[Ver mais...]</a></td>
                </tr>

                <tr>
                    <th class="tratamento-retenção"> Tratatamento e retenção de dados pessoais</th>
                    <td class="conteudo"> Finalidades pelas quais tratamos os seus dados pessoais, bem como por quanto
                        tempo serão
                        retidos e, ainda, quais são os métodos de segurança adotados para evitar qualquer tipo de
                        incidente
                        envolvendo os seus dados pessoais. <a href="#tratamento">[Ver mais...]</a></td>

                </tr>
                <tr>
                    <th class="compartilhamento"> Compartilhamento de dados pessoais</th>
                    <td class="conteudo"> A Casa Museu Ema Klabin não comercializa os seus dados pessoais. Porém, há a
                        possibilidade
                        de compartilhamento de tais dados pessoais com terceiros. <a href="#compartilhamento">[Ver
                            mais...]</a></td>

                </tr>

                <tr>
                    <th class="cookies"> Cookies </th>
                    <td class="conteudo"> A Casa Museu Ema Klabin utiliza cookies ou tecnologias semelhantes para
                        coletar
                        informações sobre o computador ou dispositivo móvel do Usuário, com a finalidade de garantir o
                        funcionamento
                        adequado do Site e melhoria na experiência de navegação. <a href="#cookies">[Ver mais...]</a>
                    </td>

                </tr>

                <tr>
                    <th class="controle"> Controle dos dados pessoais e como exercer os seus direitos </th>
                    <td class="conteudo"> Confirmação da existência de tratamento, acesso, correção etc. <a href="#controle">[Ver
                            mais...]</a></td>

                </tr>

                <tr>
                    <th class="alteracoes">Alterações na política de privaciade </th>
                    <td class="conteudo"> Notificaremos os Usuários sobre eventuais alterações materiais nesta Política
                        através de
                        postagem em nosso Site. <a href="#alteracoes">[Ver mais...]</a></td>

                </tr>



            </table>

            <p> A nossa Política não se aplica aos serviços oferecidos por terceiros, portanto, ao ser encaminhado,
                através de
                link externo, a outros websites, ou ao adquirir produtos/serviços de terceiros, por meio deste Site,
                recomendamos a análise cautelosa das políticas de privacidade deles. </p>
        </section>

        <section id="natureza-opcional">
            <h2> NATUREZA OPCIONAL DE CONCESSÃO DOS DADOS. </h2>
            <ol>
                <li>
                    O Usuário é livre para utilizar os Serviços oferecidos pelo Site e, ao optar por
                    utilizá-los, a
                    Casa Museu Ema Klabin solicitará os dados mínimos necessários para fornecer tais
                    Serviços. A não
                    concessão desses dados mínimos solicitados impossibilitará a prestação dos Serviços
                    solicitados,
                    inviabilizando o acesso a seções específicas do Site.
                </li>
            </ol>
        </section>

        <section id="tipo-dados">
            <h2>TIPOS DE DADOS PROCESSADOS.</h2>
            <ol>
                <li>
                    Dados de navegação, coletados automaticamente: durante o funcionamento normal do Site,
                    certos
                    dados pessoais poderão vir a ser coletados por conta da utilização normal, pelos
                    Usuários, de
                    protocolos de comunicação da Internet. Essas informações poderão incluir, por exemplo,
                    endereços
                    de IP, desempenho do provedor, da rede e do dispositivo, o tipo do navegador, o sistema
                    operacional; e serão adquiridas somente para obter estatísticas anônimas sobre o uso, de
                    forma a
                    melhorar continuamente o acesso e o conteúdo do Site. Tais informações serão excluídas
                    após o
                    processamento e poderão ser usadas para determinar responsabilidades em caso de crimes
                    cibernéticos.

                </li>
                <li>
                    Dados fornecidos voluntariamente pelos Usuários: ao acessar o Site, o Usuário poderá
                    optar por i)
                    se cadastrar em nossa newsletter e, para tanto, informar, explícita e voluntariamente,
                    seu nome
                    e e-mail; ii) encaminhar dúvidas, sugestões ou requerimentos à Casa Museu Ema Klabin,
                    por meio
                    da seção “Contato”, disponível no Site, devendo informar seu nome, e-mail e telefone,
                    para que
                    possamos respondê-lo; ou iii) adquirir ingressos para eventos ou exposições, devendo
                    informar
                    seus dados cadastrais, como nome, e-mail, CPF, data de aniversário, número de telefone,
                    endereço
                    e dados para pagamento. Como se vê, a Casa Museu Ema Klabin coleta o mínimo possível de
                    dados, a
                    fim de manter a funcionalidade do Site e a qualidade dos Serviços.
                </li>
            </ol>
        </section>

        <section id="comunicacao">
            <h2>COMUNICAÇÃO.</h2>
            <ol>
                <li>
                    Os Usuários estão cientes de que, ao interagirem com o Site, poderão receber mensagens por e-mail
                    sobre a Casa Museu Ema Klabin, inclusive de conteúdo publicitário, para divulgação das novidades que
                    envolvem a instituição e seus Parceiros. Caso deseje, o Usuário poderá descadastrar o recebimento de
                    tais comunicações nos próprios e-mails recebidos, ou, ainda, enviando uma mensagem diretamente para
                    o nosso Encarregado (DPO) pelo e-mail privacidade@emaklabin.org.br. No entanto, mesmo se o Usuário
                    optar por não receber os e-mails anteriores, a Casa Museu Ema Klabin ainda poderá enviar e-mails
                    transacionais, por exemplo, em conexão com algum Serviço contratado.

                </li>
            </ol>
        </section>

        <section id="tratamento">
            <h2>TRATAMENTO E RETENÇÃO DOS DADOS.</h2>
            <ol>
                <li>
                    Os dados são processados de acordo com a legislação e incluídos em base de dados
                    eletrônicas ou
                    físicas, de acordo com as finalidades estabelecidas neste documento, e acessados pelo
                    mínimo de
                    pessoas necessárias ao tratamento, todas obrigadas aos deveres de confidencialidade e
                    segurança.
                    Basicamente, a Casa Museu Ema Klabin utiliza os seus dados para:

                    <ul>
                        <li>
                            Atender à finalidade para a qual o dado foi fornecido: Nós podemos utilizar os dados
                            que o
                            Usuário nos forneceu para cumprir a finalidade informada no momento da coleta. Por
                            exemplo,
                            podemos usar seus dados de identificação e qualificação para permitir a devida
                            execução dos
                            Serviços oferecidos no Site, como cursos, palestras e exposições;
                        </li>
                        <li>Cumprir com obrigações legais ou regulatórias: seus dados pessoais poderão ser
                            utilizados
                            para o atendimento de obrigações dispostas em lei, regulações de órgãos
                            governamentais,
                            autoridades fiscais, Poder Judiciário e/ou outra autoridade competente;
                        </li>
                        <li>Permitir o exercício regular de nossos direitos: mesmo após o término da nossa
                            relação com
                            Você, Nós poderemos tratar alguns de seus dados pessoais para exercer nossos
                            direitos
                            garantidos em lei, inclusive como prova em processos judiciais ou administrativos; e
                        </li>
                        <li>Realizar atividades de tratamento internas com base em nosso legítimo interesse: Nós
                            podemos
                            tratar os dados, também, com base em nosso legítimo interesse, sempre observando os
                            limites
                            da sua expectativa e nunca em prejuízo de seus interesses, direitos e liberdades
                            fundamentais.
                        </li>
                    </ul>
                </li>

                O armazenamento é feito em servidores que seguem os critérios internacionais de
                segurança e
                retidos pelo tempo necessário para atingir a finalidade para a qual foram coletados,
                inclusive
                para fins de cumprimento de quaisquer obrigações legais, contratuais, de prestação de
                contas ou
                requisição de autoridades competentes. Posteriormente, os dados pessoais serão apagados,
                exceto
                se houver outras obrigações legais de armazenamento.

                </li>
            </ol>
        </section>

        <section id="compartilhamento">
            <h2>COMPARTILHAMENTO DOS DADOS.</h2>
            <ol>
                <li>

                    A Casa Museu Ema Klabin não comercializa os dados pessoais coletados no Site ou durante
                    a
                    prestação de seus Serviços. Porém, há a possibilidade de compartilhamento com nossos
                    contratados,
                    parceirosde negócios e prestadores de serviços para finalidade exclusiva de executar
                    tais
                    Serviços, com base
                    nos seguintes critérios e para as finalidades descritas abaixo:


                    <ul>
                        <li>
                            Parceiros de negócios da Casa Museu Ema Klabin: Nós podemos compartilhar os
                            dados dos
                            Usuários com outras empresas parceiras da Casa Museu Ema Klabin, que viabilizam
                            a
                            realização de eventos e exposições, para operacionalização e oferta de novos
                            serviços,
                            como venda de ingressos, marketing, prospecção e pesquisas de mercados. Você
                            sempre será
                            informado quando o compartilhamento ocorrer e deverá consultar as Políticas de
                            Privacidade dos parceiros, para compreender como estes realizam o tratamento de
                            seus
                            dados pessoais;

                        </li>
                        <li>
                            Prestadores de serviços e outros terceiros: essas empresas trabalham com a Casa
                            Museu
                            Ema
                            Klabin para viabilizar a prestação dos Serviços ao Usuário e aprimorá-los. São
                            exemplos
                            os nossos parceiros prestadores de serviços de tecnologia. Esses parceiros
                            recebem as
                            informações pessoais dos Usuários com a finalidade específica de prestar
                            serviços à
                            própria Casa Museu Ema Klabin e não possuem quaisquer direitos de uso dessas
                            informações
                            fora dessa hipótese;
                        </li>
                        <li>
                            Requisição judicial: a Casa Museu Ema Klabin pode compartilhar dados pessoais em
                            caso de
                            requisição judicial ou mediante determinação de autoridade competente, nos
                            termos da
                            lei; e
                        </li>
                        <li>
                            Com a autorização do Usuário: em outros casos não previstos acima, havendo o
                            objetivo de
                            compartilhamento dos dados pessoais e informações, enviaremos ao Usuário uma
                            notificação
                            com informações a respeito de tal compartilhamento para solicitar o seu
                            consentimento
                            com a finalidade determinada.</p>
                        </li>
                    </ul>
                </li>
            </ol>

        </section>

        <section id="cookies">
            <h2> POLÍTICA DE COOKIES. </h2>
            <ol>
                <li>

                    Ao visitar um site, informações pessoais como nome, e-mail e interesses dos Usuários são
                    armazenadas em um cookie. Trata-se de uma prática comum no âmbito da internet. Os
                    cookies ajudam
                    o Site a se lembrar de informações sobre a visita, como o seu idioma, por exemplo. Isso
                    pode
                    tornar a sua próxima visita mais fácil e o Site mais útil para o Usuário.


                </li>

                <li>

                    A Casa Museu Ema Klabin utiliza cookies ou tecnologias semelhantes para coletar
                    informações
                    sobre o computador ou dispositivo móvel do Usuário, com a finalidade de garantir o
                    funcionamento
                    adequado do Site e melhoria na experiência de navegação. Os cookies servem para
                    simplificar a
                    análise do tráfego ou indicar quando um site é visitado, permitindo o envio de
                    informações a
                    usuários, cabendo a eles fazer a gestão desses cookies em seus próprios navegadores de
                    Internet.


                </li>
            </ol>

        </section>

        <section id="controle">
            <h2>CONTROLE DE DADOS.</h2>
            <ol>
                <li>
                    A Casa Museu Ema Klabin possui um Encarregado pelo tratamento de dados pessoais (DPO),
                    disponível
                    para esclarecimentos ou pedidos relacionados às informações dos Usuários. Para confirmar a
                    existência do tratamento, acessar, corrigir ou atualizar seus dados, solicitar a
                    portabilidade, a
                    anonimização de dados desnecessários ou excessivos, o cliente deverá entrar em contato pelo
                    e-mail
                    privacidade@emaklabin.org.br. Sua solicitação será analisada e, caso o pedido seja legítimo
                    e
                    cabível, será atendido em tempo razoável, respeitando-se o prazo legal de 15 (quinze) dias,
                    contados
                    de seu recebimento.

                </li>
            </ol>
        </section>

        <section id="alteracoes">
            <h2> ALTERAÇÕES NA POLÍTICA DE PRIVACIDE. </h2>
            <ol>
                <li>
                    Eventuais alterações nesta Política de Privacidade serão informadas por meio de postagem em
                    nosso
                    Site e, se necessário, por e-mail. Por isso, recomendamos que os Usuários acessem nossa
                    Política
                    periodicamente e observem a data da última alteração, ao final deste documento, para
                    confirmar
                    eventual modificação. Alterações significativas quanto à finalidade do tratamento dos dados,
                    ou que
                    impactem os direitos dos titulares, serão informadas com maior destaque.

                </li>
            </ol>
        </section>

        <footer>
            <p>Esta Política foi modificada pela última vez em 31 de agosto de 2021.</p>
        </footer>
    </article>
<?php
    return ob_get_clean();
}

function ek_politica_privacidade_plugin_info()
{
    $plugin_info = get_file_data(__FILE__, array(
        'Version' => 'Version',
    ));
    return $plugin_info;
}

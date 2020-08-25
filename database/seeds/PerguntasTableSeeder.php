<?php

use Illuminate\Database\Seeder;
use App\Model\Perguntas;
class PerguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Perguntas::create([
            'titulo' => 'Como faço para registrar uma reclamação ou pedir informação para a DTI?',
            'conteudo' => 'Você pode registrar uma reclamação ou pedir informação, por meio do Sistema de Unificado de Atendimento (SUA) na página principal do Portal DTI. Para ter acesso, basta entrar com o mesmo usuário e senha que você utiliza para acessar a internet. Após o registro, um técnico da DTI entrará em contato.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Como faço para informar um problema ou sugestão de melhoria em algum dos sistemas da Prefeitura?',
            'conteudo' => 'Se o problema for referente ao sistema Webpúblico, é só abrir um chamado no Sistema de Unificado de Atendimento (SUA) na página principal do Portal DTI. Para ter acesso, basta entrar com o mesmo usuário e senha que você utiliza para acessar a internet. Caso seja relacionado ao E-Saj, Gmus ou SITgeo, o problema terá que ser relatado ao gestor do sistema nas secretarias responsáveis (PGM, SEMSA e SEINFRA). Após o registro, um técnico da DTI entrará em contato.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Não tenho acesso à internet, o que devo fazer?',
            'conteudo' => 'A solicitação de senha para acesso à internet é online, basta preencher o formulário de solicitação na página principal do Portal da DTI ou clicando aqui. A informação sobre usuário e senha serão enviados no e-mail alternativo informado no formulário e também em contato telefônico. Conjuntamente a criação do acesso à internet, também é realizada a criação do e-mail institucional seunome@riobranco.ac.gov.br',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Preciso de um e-mail institucional, qual é o procedimento?',
            'conteudo' => 'A solicitação de criação de e-mail institucional é online, basta preencher o formulário de solicitação na página principal do Portal da DTI ou clicando aqui. A informação sobre usuário e senha serão enviados no e-mail alternativo informado no formulário e também em contato telefônico. O formato será seunome@riobranco.ac.gov.br. Conjuntamente a criação do e-mail institucional, também é realizada a criação do acesso à internet.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Preciso de usuário e senha dos sistemas utilizados na Prefeitura, como devo proceder?',
            'conteudo' => 'Primeiro você deve preencher dois formulários: Termo de responsabilidade de uso de sistemas e o Controle de acesso ao sistema webpúblico, esse último deve ser assinado também pelo seu chefe imediato. Após o preenchimento das informações, os formulários devem ser encaminhados à DTI, que irá efetuar a criação do usuário de acordo com o módulo solicitado e o perfil descrito. A DTI encaminha usuário e senha por e-mail e telefone. Os formulários estão disponíveis neste Portal e você acessar clicando aqui.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Onde consigo o contato do técnico responsável pelo suporte do sistema Webpúblico?',
            'conteudo' => 'Cada módulo do sistema Webpúblico conta com um técnico diferente, para ter acesso ao telefone de contato, basta clicar aqui.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Estou sem internet, o que devo fazer?',
            'conteudo' => 'Primeiro verifique se o seu computador realmente está conectado na rede por meio de cabo ou wiffi, caso não esteja, tente conectar. Persistindo o problema, faça contato com o responsável pela TI da sua secretaria (veja a lista aqui).',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Estou sem acesso aos sistemas da Prefeitura, o que devo fazer?',
            'conteudo' => 'Primeiro verifique se o seu computador realmente está conectado na rede por meio de cabo ou wiffi, caso não esteja, tente conectar. Persistindo o problema, faça contato com o responsável pela TI da sua secretaria (veja a lista aqui).',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Continuo utilizando os sistemas, mas não consigo navegar na internet, isso é normal?',
            'conteudo' => 'Pode acontecer de não ter acesso à internet, mas os sistemas continuarem sendo acessados normalmente. Isso ocorre porque os sistemas coorporativos utilizarem a intranet, que não depende de navegação pela internet, os dados trafegam diretamente entre o Datacenter da Prefeitura e o seu computador.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
        Perguntas::create([
            'titulo' => 'Por que não consigo acessar os sistemas da Prefeitura quando estou em casa?',
            'conteudo' => 'Por critérios de segurança todos os sistemas coorporativos da Prefeitura de Rio Branco, somente são acessados na rede interna, ou seja, de equipamentos conectados nas secretarias.',
            'ocultar' => 0,
            'criado_por' => 1,
        ]);
    }
}

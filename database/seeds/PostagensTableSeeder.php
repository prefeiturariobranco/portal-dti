<?php

use Illuminate\Database\Seeder;
use App\Model\Postagens;
class PostagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Postagens::create([
            'imagem' => 'melhoriaconectividade.jpeg',
            'titulo' => 'Melhorias na conectividade da Cidade Digital',
            'conteudo' => '<p>A rede própria de comunicação de dados via rádio de transmissão, batizado de “Cidade Digital”, é responsável pela conexão em cerca de 60 prédios públicos municipais. A Prefeitura realizou entre os meses de fevereiro e junho, intervenções na rede comunicação de dados, que proporcionaram ganho significativo de performance e estabilidade na conexão de rede. O Cidade Digital é formado por sete Estações de Rádio Base (ERB) que trasmitem o sinal de rádio para todas as regionais da cidade. Devido aos constantes problemas de energia, foi instalado em cada ERB, um banco de baterias com autonomia de energia de até 2h. A Diretoria de Tecnologia da Informação (DTI) conta com uma equipe de campo, que visita as unidades que recebem sinal de internet por meio do Cidade Digital. Em média são visitados quatro prédios diariamente, na ocasião são realizados serviços de manutenção preventiva e corretiva nos equipamentos de rádio e torre. Além da equipe de campo, a DTI conta também com os técnicos que monitoram a rede no Núcleo Operacional de Controle (NOC), com a ajuda de softwares específicos, é possível antecipar problemas e ter uma resposta bem mais rápida.</p>',
            'criado_por' => 1,
            'ocultar' => 0,
        ]);
        Postagens::create([
            'imagem' => 'bg.jpg',
            'titulo' => 'IPTU no App do Banco do Brasil',
            'conteudo' => '<p style="text-align: justify;">O processo de modernização da gestão conta com trabalhos realizados entre a Prefeitura e instituições parceiras. Uma dessas parcerias resultou em mais uma facilidade para o contribuinte. Visando proporcionar mais facilidade no processo de pagamento do IPTU, a Prefeitura e o Banco do Brasil, disponibilizaram mais um canal para quitação do imposto, agora o contribuinte pode realizar o pagamento por meio do aplicativo do banco, ou consultando a dívida em um dos caixas eletrônicos da rede BB. Basta instalar o app do banco, registrar uma conta e caso existam débitos de IPTU, será apresentada uma mensagem com informações sobre valores e obtenção do código de barras para pagamento.</p>',
            'criado_por' => 1,
            'ocultar' => 0,
        ]);

    }
}

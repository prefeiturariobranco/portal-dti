<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(SecretariasTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(PostagensTableSeeder::class);
        $this->call(IconesCategoriasTableSeeder::class);
        $this->call(IconesTableSeeder::class);
        $this->call(PerguntasTableSeeder::class);
        $this->call(SubIconesTableSeeder::class);
        $this->call(TiLocalTableSeeder::class);
        $this->call(ContatosTableSeeder::class);
        $this->call(TutoriaisTableSeeder::class);
        $this->call(DocumentosCategoriasTableSeed::class);
        $this->call(DocumentosTableSeed::class);
        $this->call(DocumentosArquivosTableSeed::class);
        $this->call(InvestimentosCategoriasTableSeed::class);
        $this->call(InvestimentosTableSeed::class);
        $this->call(EquipeConfigTableSeeder::class);
        $this->call(SistemaWebPublicoTableSeeder::class);
        $this->call(InfraConfigTableSeeder::class);
        $this->call(PermissoesTableSeeder::class);
        $this->call(RelatoriosTableSeeder::class);
        $this->call(MapasCategoriasTableSeeder::class);
        $this->call(MapasTableSeeder::class);
        $this->call(WebPublicoChamadosTableSeeder::class);
        $this->call(InfraEspecificacoesTableSeeder::class);
    }
}

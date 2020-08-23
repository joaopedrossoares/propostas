<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BairroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            'Sagrada Família',
            'Buritis',
            'Padre Eustáquio',
            'Lindéia',
            'Santa Mônica',
            'Céu Azul',
            'Santa Cruz (ZN)',
            'Santa Cruz (ZL)',
            'Santo Antônio',
            'Alto Vera Cruz',
            'Jardim dos Comerciários',
            'Piratininga',
            'Mantiqueira',
            'Serra',
            'Sion',
            'Lourdes',
            'Santa Amélia',
            'Cabana do Pai Tomás',
            'Santa Efigênia (ZL)',
            'Santa Efigênia (HC)',
            'Pindorama',
            'Boa Vista',
            'Gutierrez',
            'Ouro Preto',
            'Castelo',
            'Planalto',
            'São João Batista',
            'Centro',
            'Goiânia',
            'Jaqueline',
            'Ribeiro de Abreu',
            'Santa Terezinha',
            'Santa Tereza',
            'Jardim Felicidade',
            'Cidade Nova',
            'Carlos Prates (ZO)',
            'Carlos Prates (HC)',
            'Estrela Dalva',
            'Havaí',
            'Nova Suissa',
            'Conjunto Taquaril',
            'União',
            'Salgado Filho',
            'Araguaia',
            'Glória',
            'Serra Verde',
            'São Geraldo',
            'Prado',
            'São Gabriel',
            'Tupi B',
            'Paraíso',
            'Copacabana',
            'Caiçaras',
            'Camargos',
            'Rio Branco',
            'Anchieta',
            'Ipiranga',
            'Milionários',
            'Betânia',
            'Diamante',
            'Floresta (HC)',
            'Floresta (ZL)',
            'Savassi',
            'Jardim Guanabara',
            'Vila Vista Alegre',
            'Tirol',
            'Jardim América (ZO)',
            'Jardim América (ZS)',
            'Caiçara Adelaide',
            'Concórdia',
            'Tupi A',
            'Minascaixa',
            'Cardoso',
            'Colégio Batista (ZL)',
            'Colégio Batista (HC)',
            'Barreiro',
            'Europa',
            'Serrano',
            'Jardim Alvorada (ZO)',
            'Jardim Alvorada (ZN)',
            'Santo Agostinho',
            'Aparecida',
            'Floramar',
            'Dom Bosco',
            'João Pinheiro',
            'Nossa Senhora de Fátima',
            'Jardim Vitória',
            'Alípio de Melo',
            'Nova Gameleira',
            'Itapoã',
            'Jardim Leblon',
            'Cachoeirinha',
            'Bairro das Indústrias I',
            'Santa Inês',
            'Lagoa',
            'São Bernardo',
            'Renascença',
            'Dona Clara',
            'Funcionários',
            'Belvedere',
            'Maria Goretti',
            'Nova Vista',
            'Independência',
            'Novo Aarão Reis',
            'Manacás',
            'Vila Pinho',
            'Esplanada',
            'Nazaré',
            'Cruzeiro',
            'Vale do Jatobá',
            'Vila Barragem Santa Lúcia',
            'Providência',
            'Flávio Marques Lisboa',
            'Novo Glória',
            'Guarani',
            'Letícia',
            'Maria Helena',
            'Coqueiros',
            'Coração Eucarístico',
            'Palmeiras (ZS)',
            'Palmeiras (ZO)',
            'Itaipu',
            'Candelária',
            'Calafate',
            'São Tomáz',
            'Alto Caiçaras',
            'Santo André',
            'Santa Lúcia',
            'Vila Clóris',
            'Santa Maria',
            'Ventosa',
            'Brasil Industrial',
            'Jardim São José',
            'São Marcos',
            'Santa Rosa',
            'Heliópolis',
            'Apolônia',
            'Marçola',
            'Minaslândia',
            'Bonsucesso (ZS)',
            'Bonsucesso (ZO)',
            'Paquetá',
            'Luxemburgo',
            'Casa Branca',
            'São Pedro',
            'Grajaú',
            'Nossa Senhora da Conceição',
            'Paulo VI',
            'Barro Preto',
            'Teixeira Dias',
            'Miramar',
            'Santa Rita de Cássia',
            'Califórnia',
            'Nova Granada (ZS)',
            'Nova Granada (ZO)',
            'Lagoinha Leblon',
            'Horto Florestal',
            'Jardim Montanhês',
            'Juliana',
            'São Salvador',
            'Coração de Jesus',
            'Silveira',
            'Olaria',
            'Pompéia',
            'Vila CEMIG',
            'Nova Cintra',
            'Castanheira',
            'Palmares (ZL)',
            'Palmares (ZN)',
            'Cinquentenário',
            'Bandeirantes',
            'Santa Helena',
            'Santa Branca',
            'Vila Maria',
            'Alto Barroca',
            'Vista Alegre',
            'Vista do Sol',
            'Aparecida Sétima Seção',
            'Saudade',
            'Lajedo',
            'Graça',
            'São Luíz',
            'Estrela do Oriente',
            'Nova Cachoeirinha',
            'Ipê',
            'Urca',
            'Bairro Novo das Indústrias',
            'Boa Viagem',
            'Estoril',
            'Nova Floresta',
            'Monsenhor Messias',
            'Liberdade',
            'Madre Gertrudes',
            'Pedreira Prado Lopes',
            'Bonfim (ZN)',
            'Bonfim (HC)',
            'Nova Esperança',
            'Conjunto Minascaixa',
            'São Francisco',
            'Solar do Barreiro',
            'Nossa Senhora da Aparecida',
            'Trevo',
            'Confisco',
            'Dom Cabral',
            'Mineirão',
            'Dom Silvério',
            'Fernão Dias',
            'Ouro Minas',
            'Beira-Linha',
            'Santana do Cafezal',
            'Jaraguá',
            'Vila Primeiro de Maio',
            'Eymard',
            'Novo São Lucas',
            'Lagoinha (ZN)',
            'Lagoinha (HC)',
            'Vera Cruz',
            'Maria Virgínia (ZL)',
            'Maria Virgínia (ZN)',
            'Carmo',
            'Oeste',
            'São Paulo',
            'Conjunto Jatobá',
            'Fazendinha',
            'São Bento',
            'Vila Novo São Lucas',
            'Leonina',
            'Bom Jesus',
            'Granja de Freitas',
            'Vila Paris',
            'Mariano de Abreu',
            'Minas Brasil',
            'Monte Azul',
            'Mangueiras',
            'Inconfidência',
            'Ermelinda',
            'Jatobá',
            'Vitória',
            'Horto',
            'Taquaril',
            'Conjunto Califórnia I',
            'Indaiá',
            'Barroca',
            'Dom Joaquim',
            'Pirajá',
            'Conjunto Paulo VI',
            'Alto dos Pinheiros',
            'Parque São José',
            'Vila Califórnia',
            'Novo Tupi',
            'Vila Independência I',
            'Conjunto Jardim Filadélfia',
            'São Lucas',
            'Vila Sumaré',
            'São Cristóvão',
            'Aarão Reis',
            'Pilar',
            'Santa Cecília',
            'Marajó',
            'Flávio de Oliveira',
            'São Jorge III',
            'Senhor dos Passos',
            'Universo',
            'Santa Rita',
            'Santa Sofia',
            'Conjunto Capitão Eduardo',
            'Campo Alegre',
            'Vila Jardim Alvorada',
            'São Jorge II',
            'Conjunto Celso Machado',
            'Venda Nova',
            'Pongelupe',
            'Zilah Spósito',
            'Canaã',
            'São Gonçalo',
            'Jonas Veiga',
            'Acaiaca',
            'Vila São João Batista',
            'Primeiro de Maio',
            'Novo Santa Cecília',
            'Etelvina Carneiro',
            'Parque São Pedro',
            'Santa Margarida',
            'Cenáculo',
            'Vila Nova Cachoeirinha I',
            'Belmonte',
            'Penha',
            'Alpes',
            'Petropolis',
            'Mariquinhas',
            'Esperança',
            'Ernesto do Nascimento',
            'Vila Santa Mônica',
            'Vila Aeroporto',
            'Granja Werneck (ZN)',
            'Granja Werneck (ZL)',
            'Braúnas',
            'Águas Claras',
            'Alta Tensão I',
            'Frei Leopoldo',
            'Universitário',
            'Suzana',
            'Mangabeiras',
            'Vila Madre Gertrudes I',
            'Vila Mangueiras',
            'Barão Homem de Melo I',
            'Vila São Paulo',
            'Túnel de Ibirité',
            'Imbaúbas',
            'Ademar Maldonado',
            'Itatiaia',
            'João Paulo II',
            'Comiteco',
            'Conjunto Califórnia II',
            'Jardinópolis',
            'São Jorge I',
            'Vila Ecológica',
            'Vila Jardim São José',
            'Vila Piratininga',
            'São João',
            'Biquinhas',
            'Tiradentes',
            'Pousada Santo Antônio',
            'Vila Nossa Senhora Aparecida',
            'Vila Antena',
            'São Benedito',
            'Estrela',
            'Vila Átila de Paiva',
            'Olhos d\'água',
            'Vila Coqueiral',
            'Cidade Jardim',
            'Vila Trinta e Um de Março',
            'São José',
            'Solimões',
            'Bernadete',
            'Xodó-Marize',
            'Vila da Luz',
            'Jardim Atlântico',
            'Vila Formosa',
            'Vila Nova Gameleira II',
            'Vila Santa Rosa',
            'Engenho Nogueira',
            'Vila Copacabana',
            'São Francisco das Chagas',
            'Vila Oeste',
            'Aeroporto',
            'Beija Flor',
            'Capitão Eduardo',
            'Marieta I',
            'Átila de Paiva',
            'Vila São Rafael',
            'Vitória da Conquista',
            'Acaba Mundo',
            'Conjunto Santa Maria',
            'Jardim do Vale',
            'Monte São José',
            'Álvaro Camargos',
            'Sport Club',
            'Bairro das Indústrias II',
            'Conjunto Bonsucesso',
            'Vila Dias',
            'Vila Esplanada',
            'Vila Independência II',
            'Vila de Sá',
            'Garças',
            'Vila Boa Vista',
            'Delta',
            'Corumbiara',
            'Madri',
            'Pantanal',
            'Conjunto Floramar',
            'Vila Pilar',
            'Vila Olhos d\'água',
            'Marilândia',
            'Virgínia',
            'Vila Minaslândia',
            'Vila Nova Gameleira I',
            'Vila dos Anjos',
            'Ambrosina',
            'Andiroba',
            'Marmiteiros',
            'Guaratã',
            'Vila União',
            'Vila Mantiqueira',
            'Conjunto Novo Dom Bosco',
            'Vila Nova Paraíso',
            'Vila Paquetá',
            'Vila Inestan',
            'Vila São Gabriel Jacuí',
            'Vila Nova Cachoeirinha IV',
            'Vila Real II',
            'Vila Nossa Senhora do Rosário',
            'Vila Santo Antônio Barroquinha',
            'Vila Madre Gertrudes II',
            'Bela Vitória',
            'Vila Maloca',
            'Conjunto Lagoa',
            'Vila Suzana I',
            'Distrito Industrial do Jatobá',
            'Pirineus',
            'Vila Aeroporto Jaraguá',
            'Vila Nova',
            'Vila Ouro Minas',
            'Três Marias',
            'Vila Nova dos Milionários',
            'Mirante',
            'Vila Bandeirantes',
            'Boa Esperança',
            'Vila da Paz',
            'Vila Calafate',
            'São Vicente',
            'Novo Ouro Preto',
            'Canadá',
            'Antônio Ribeiro de Abreu',
            'Satélite',
            'Vila Antena Montanhês',
            'Grotinha',
            'Cônego Pinheiro',
            'Chácara Leonina',
            'Vila Madre Gertrudes III',
            'Vila São Gabriel',
            'Vila Paraíso',
            'Ápia',
            'Vila da Amizade',
            'Alta Tensão',
            'João Alfredo',
            'Alto das Antenas',
            'Maria Teresa',
            'Caetano Furquim',
            'Vila Independência IV',
            'Unidas',
            'Vila Piratininga Venda Nova',
            'São Sebastião',
            'Nova Pampulha',
            'Vila Havaí',
            'Mirtes',
            'Serra do Rola Moça',
            'Vila SESC',
            'Morro dos Macacos',
            'Vila da Área',
            'Vila Santo Antônio',
            'Flamengo',
            'Gameleira',
            'Vila COPASA',
            'São Damião',
            'Custodinha',
            'Boa União I',
            'Conjunto São Francisco de Assis',
            'Vila Petrópolis',
            'Conjunto Providência',
            'Marieta II',
            'Vila Engenho Nogueira',
            'Vila Jardim Montanhês',
            'Vila das Oliveiras',
            'Conjunto Serra Verde',
            'Camponesa III',
            'Vila Jardim Leblon',
            'Vila Tirol',
            'Barão Homem de Melo III',
            'CDI Jatobá',
            'Vila Madre Gertrudes V',
            'Vila Rica',
            'Grota',
            'Vila Betânia',
            'Vila São Dimas',
            'Vila Batik',
            'Barão Homem de Melo IV',
            'Vila Ipiranga',
            'Vila São Geraldo',
            'Boa União II',
            'Cidade Jardim Taquaril',
            'Nossa Senhora do Rosário',
            'Vila Canto do Sabiá',
            'Laranjeiras',
            'Pindura Saia',
            'Vila Nova Cachoeirinha II',
            'Vila do Pombal',
            'Santa Isabel',
            'Vila Satélite',
            'Várzea da Palma',
            'Camponesa I',
            'Vila Real I',
            'Bacurau',
            'Nova América',
            'Vila Nova Gameleira III',
            'Lorena',
            'Vila PUC',
            'Vila FUMEC',
            'Vila São Francisco',
            'Mala e Cuia',
            'Vila Suzana II',
            'Maravilha',
            'Cônego Pinheiro A',
            'Baleia',
            'Xangri-lá',
            'Belém',
            'Bispo de Maura',
            'Campus UFMG',
            'Guanabara',
            'Lagoa da Pampulha',
            'Sumaré',
            'Vila Vera Cruz I',
            'Vila Vera Cruz I'
        ];
                                           
        foreach ($places as $place) {
            DB::table('places')->insert([
                'name' => $place
            ]);
        }
    }
}

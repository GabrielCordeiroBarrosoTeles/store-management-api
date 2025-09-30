<?php

namespace Database\Seeders;

use App\Models\Estoque;
use Illuminate\Database\Seeder;

class EstoqueSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            ['terra_cortril.webp', 'Terra-Cortril Spray', 'Anti-Inflamatórios', 'Mensagem 2', '31', '39.90', 0, 377, 'ZOETIS', '100ml'],
            ['equipalazone.webp', 'Equipalazone', 'Anti-Inflamatórios', 'Mensagem 2', '55.90', '62.90', 3, 17, 'Ceva', '100ml'],
            ['diclofenato.jpg', 'Diclofenaco', 'Anti-Inflamatórios', 'Mensagem 2', '8.50', '12.90', 0, 65, 'JASaúdeAnimal', '50ml'],
            ['cortvet.webp', 'Cortvet', 'Anti-Inflamatórios', 'Mensagem 2', '4.90', '7.40', 45, 5, 'UCB', '10ml'],
            ['CortTrat.webp', 'Cort-trat', 'Anti-Inflamatórios', 'Mensagem 2', '19.90', '25.90', 40, 0, 'SM', '100g'],
            ['diuzon.webp', 'Diuzon', 'Anti-Inflamatórios', 'Mensagem 2', '39.90', '45.90', 12, 0, 'Chemitec', '10ml'],
            ['flumax.webp', 'Flumax', 'Anti-Inflamatórios', 'Mensagem 2', '77.90', '89.90', 0, 9, 'JASaúdeAnimal', '100ml'],
            ['terramicina-la.webp', 'Terramicina /LA', 'Antibióticos', 'Mensagem 3', '15.90', '20.90', 59, 1, 'ZOETIS', '50ml'],
            ['terramicina_po.webp', 'Terramicina Pó', 'Antibióticos', 'Mensagem 2', '19.00', '24.40', 22, 0, 'ZOETIS', '100g'],
            ['cef-50.webp', 'Cef-50', 'Antibióticos', 'Mensagem 3', '55.90', '60.00', 42, 3, 'Agener', '100ml'],
            ['Agemoxi-Cl.webp', 'Agemoxi-CL', 'Antibióticos', 'Mensagem 2', '55.90', '60.00', 0, 6, 'Agemoxi', '250mg'],
            ['Pulmodrazin_Plus.webp', 'Pulmodrazin Plus', 'Antimicrobianos', 'Mensagem 1', '18.80', '23.15', 11, 1, 'Pearson', '25ml'],
            ['pencil-pronto.webp', 'Pencil Pronto', 'Antimicrobianos', 'Mensagem 1', '16.90', '22.00', 25, 0, 'Calbos', '50ml'],
            ['Acura.webp', 'Acura', 'Antimicrobianos', 'Mensagem 2', '25.90', '33.00', 45, 0, 'Clarion', '25ml'],
            ['Tribrissen.jpg', ' Tribrissen', 'Antimicrobianos', 'Mensagem 2', '19.85', '25.05', 43, 2, 'Virbac', '15ml'],
            ['antitoxico_oral.webp', 'Antitóxicos SM', 'Antitóxicos', 'Mensagem 1', '14.30', '20.22', 0, 22, 'SM', '20ml'],
            ['Mercepton.webp', 'Mercepton', 'Antitóxicos', 'Mensagem 1', '25.90', '32.06', 34, 2, 'Bravet', '100ml'],
            ['Anestésico_bravet.webp', 'Anestésico Bravet', 'Anestésicos', 'Mensagem 2', '17.20', '22.80', 29, 1, 'Bravet', '50ml'],
            ['anestesico-vansil.jpg', 'Anestésico Vansil', 'Anestésicos', 'Mensagem 3', '17.20', '25.90', 40, 5, 'Vansil', '100ml'],
            ['Verrutrat.webp', 'Verrutrat', 'Profilaxia e Tratamento', 'Mensagem 2', '16.90', '22.80', 39, 15, 'UCB', '20ml'],
            ['Tristezina.webp', 'Tristezina', 'Profilaxia e Tratamento', 'Mensagem 2', '22.20', '28.90', 45, 0, 'UCB', '20ml'],
            ['Imizol.webp', 'Imizol', 'Profilaxia e Tratamento', 'Mensagem 2', '59.90', '66.90', 14, 0, 'MSD', '15ml'],
            ['ferron.webp', 'Ferron B-12', 'Suplementos e Vitaminas', 'Mensagem 3', '16.21', '21.12', 60, 0, 'Calbos', '100ml'],
            ['ferron_50.webp', 'Ferron B-12', 'Suplementos e Vitaminas', 'Mensagem 2', '16.90', '22.80', 49, 0, 'Calbos', '50ml'],
            ['Rubralan.webp', 'Rubralan 5000', 'Suplementos e Vitaminas', 'Mensagem 1', '14.90', '19.00', 85, 0, 'Calbos', '10ml'],
            ['Rubralan_50.webp', 'Rubralan 5000', 'Suplementos e Vitaminas', 'Mensagem 2', '35.90', '40.90', 85, 0, 'Calbos', '50ml'],
            ['PhenodralAmpola.webp', ' Phenodral Ampola', 'Suplementos e Vitaminas', 'Mensagem 2', '8.50', '13.80', 60, 0, 'UCB', '15ml'],
            ['organovit-500.webp', 'Organovit', 'Suplementos e Vitaminas', 'Mensagem 3', '147.00', '197.90', 88, 1, 'Biofarm', '500ml'],
            ['BioLeite.png', 'BioLeite', 'Suplementos e Vitaminas', 'Mensagem 2', '900.00', '998.00', 90, 0, 'Quimvet', '10KG'],
            ['racaogatowhiskas.jpg', 'Ração pra Gato', 'Ração', 'Ração pra gato', '0.031', '0.058', 4500, 1500, ' Whiskas', 'n'],
            ['racaocachorro Pedigree.webp', 'Ração teste', 'Ração', 'Ração para cachorro', '0.023', '0.032', 0, 9000, 'Pedigree', 'n']
        ];

        foreach ($produtos as $produto) {
            Estoque::create([
                'imagem' => $produto[0],
                'nome' => $produto[1],
                'funcao' => $produto[2],
                'detalhe' => $produto[3],
                'valorcompra' => $produto[4],
                'valorvenda' => $produto[5],
                'quantidade' => $produto[6],
                'vendido' => $produto[7],
                'marca' => $produto[8],
                'peso' => $produto[9]
            ]);
        }
    }
}
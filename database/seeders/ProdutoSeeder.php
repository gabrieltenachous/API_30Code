<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'nivel' => 'assets/images/categories/Icon_data_base.png',
                'detalhe' => 'Laravel é um framework PHP de código aberto gratuito, criado por Taylor Otwell e destinado ao desenvolvimento de aplicações web seguindo o padrão arquitetônico model - view - controller e baseado em Symfony',
                'image' => 'assets/images/products/image_laravel.png',
                'title' => 'Laravel',
                'description' => 'Melhor Framework PHP',
            ],
            [
                "nivel" => "Iniciante",
                "description" => "Framework para plataforma Java",
                "detalhe" => "O Spring Framework é um framework de aplicação e inversão de contêiner de controle para a plataforma Java. Os principais recursos da estrutura podem ser usados ​​por qualquer aplicativo Java, mas existem extensões para a construção de aplicativos da web na plataforma Java EE.",
                "title" => "Spring Boot",
                'image' => 'assets/images/products/Image_spring_boot.png',
            ],
            [
                "nivel" => "Avançado",
                "description" => "A linguagem de marcação de hipertexto",
                "detalhe" => "A linguagem de marcação de hipertexto ou HTML é a linguagem de marcação padrão para documentos projetados para serem exibidos em um navegador da web. Pode ser auxiliado por tecnologias como Cascading Style Sheets e linguagens de script como JavaScript.",
                "title" => "HTML",
                "image"=>"assets/images/products/Image_html.png",
            ],
            [
                "nivel" => "Intermediario",
                "description" => "Variedade de ferramentas e serviços pela Google",
                "detalhe" => "Firebase é uma plataforma desenvolvida pelo Google para a criação de aplicativos móveis e da web. Era originalmente uma empresa independente fundada em 2011. Em 2014, o Google adquiriu a plataforma e agora é sua oferta principal para o desenvolvimento de aplicativos.",
                "title" => "FIREBASE",
                "image"=>"assets/images/products/Image_firebase.png",
            ],
            [
                "nivel" => "Avançado",
                "description" => "Estrutura de aplicativo ao lado do servidor",
                "detalhe" => "ASP.NET é uma estrutura de aplicativo da Web do lado do servidor de código aberto projetada para desenvolvimento da Web para produzir páginas da Web dinâmicas. Ele foi desenvolvido pela Microsoft para permitir que os programadores criem sites, aplicativos e serviços dinâmicos.",
                "title" => "ASP.NET",
                "image"=>"assets/images/products/Image_asp_net.png",
            ],
        ],);
    }
}

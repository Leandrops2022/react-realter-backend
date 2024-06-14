<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            "path" => "/",
            "label" => "Home",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/home.svg",
        ]);

        Menu::create([
            "label" => "Gerenciamento de Imóveis",
            "path" => "imoveis",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/imoveis.svg",
        ]);

        Menu::create([
            "label" => "Gerenciamento de Funcionários",
            "path" => "funcionarios",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/funcionarios.svg",
        ]);

        Menu::create([
            "label" => "Gerenciamento de Propostas",
            "path" => "propostas",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/propostas.svg",
        ]);

        Menu::create([
            "label" => "Financeiro",
            "path" => "financeiro",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/financeiro.svg",
        ]);

        Menu::create([
            "label" => "Tickets",
            "path" => "tickets",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/ticket.svg",
        ]);

        Menu::create([
            "label" => "Ajuda",
            "path" => "ajuda",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/ajuda.svg",
        ]);

        Menu::create([
            "label" => "Sobre",
            "path" => "sobre",
            "icon" => "https://test-bucket-leandrops.s3.br-sao.cloud-object-storage.appdomain.cloud/sobre.svg",
        ]);
    }
}

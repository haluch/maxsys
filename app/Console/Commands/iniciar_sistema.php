<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MenuModel as Menu;

class iniciar_sistema extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:criarmenus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Criar estrutura inicial de menus...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('menu')->delete();
        
        Menu::create([
            'menu' => 'TESTE',
            'item_menu' => 'teste',
            'link_item_menu'=>'#',
            'ativo'=>'1',
            'is_admin'=> '0'
        ]);

        Menu::create([
            'menu' => 'TESTE 1',
            'item_menu' => 'teste 1',
            'link_item_menu'=>'#',
            'ativo'=>'1',
            'is_admin'=> '0'
        ]);
        Menu::create([
            'menu' => 'TESTE 1',
            'item_menu' =>  bcrypt('teste 1'),
            'link_item_menu'=>'#',
            'ativo'=>'1',
            'is_admin'=> '0'
        ]);
    }
}

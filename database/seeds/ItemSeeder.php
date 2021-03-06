<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        /*
        DB::table('atributos')->insert([
            'marca' => 'Legion',
            'modelo'=> 'Y-500',
            'serial_number'=> '20',
            'descricao'=>'Computador com elevado poder de processamento',
            'fotografia_caminho'=>'/uploads/images/camara-canon_1580116571.png',
            'visivel'=> 1,
            'quantidade'=>10,
            'is_item'=>1,
            'is_operacional'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('atributos')->insert([ 
            'marca' => 'Canon',
            'modelo'=> '600d',
            'serial_number'=> '2002',
            'descricao'=>'Maquina fotografia semi-profissional',
            'fotografia_caminho'=>'/uploads/images/camara-canon_1580116571.png',
            'visivel'=> 0,
            'quantidade'=>11,
            'is_item'=>1,
            'is_operacional'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('atributos')->insert([
            'marca' => 'Canon 2',
            'modelo'=> '600d',
            'serial_number'=> '2002',
            'descricao'=>'Maquina fotografia semi-profissional',
            'fotografia_caminho'=>'/uploads/images/camara-canon_1580116571.png',
            'visivel'=> 1,
            'quantidade'=>11,
            'is_item'=>1,
            'is_operacional'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('atributos')->insert([
            'marca' => 'Canon 3',
            'modelo'=> '600d',
            'serial_number'=> '2002',
            'descricao'=>'Maquina fotografia semi-profissional',
            'fotografia_caminho'=>'/uploads/images/camara-canon_1580116571.png',
            'visivel'=> 1,
            'quantidade'=>11,
            'is_item'=>1,
            'is_operacional'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-",
            'name' => 'Lenovo Legion',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-2",
            'name' => 'Canon 600d',
            'categoria_id'=> '2',
            'id_atributos'=>'2',
            
            
        ]);

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-3",
            'name' => 'Canon 2',
            'categoria_id'=> '1',
            'id_atributos'=>'3',
            
            
        ]);

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-4",
            'name' => 'Canon 3',
            'categoria_id'=> '1',
            'id_atributos'=>'4',
            
            
        ]);

        */

        DB::table('atributos')->insert([
            'marca' => 'none',
            'modelo'=> 'none',
            'serial_number'=> 2,
            'descricao'=>'none',
            'fotografia_caminho'=>'/uploads/images/default.png',
            'visivel'=> 1,
            'is_item'=>1,
            'is_operacional'=>1,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

       


        

        //Reflector Luz
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Reflector Luz',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Reflector Luz',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        //Fim Reflector Luz


        //Microfone wireless de lapela
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone wireless de lapela',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone wireless de lapela',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone wireless de lapela',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone wireless de lapela',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone wireless de lapela',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
            
            
        ]);
        $i++;
        
        //Fim Microfone wireless de lapela

        //Trip?? Slick
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Trip?? Slick',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Trip?? Slick

        //Microfone stereo on camera
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone stereo on camera',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone stereo on camera',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Microfone stereo on camera',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm Microfone stereo on camera

        //H1 Handy Recorder
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'H1 Handy Recorder',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'H1 Handy Recorder',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'H1 Handy Recorder',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm H1

        //IPAD01
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'IPAD01',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim IPAD


        //IPAD01
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'IPAD01',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim IPAD

        //Oculus Rift
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Oculus Rift',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Oculus Rift',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Oculus Rift

        //Hololens
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Hololens',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Hololens

        //Tripe Manfrotto
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Tripe Manfrotto',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Tripe Manfrotto

        //Microfone SHURE
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Tripe Manfrotto',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Microfone SHURE

        //Objectiva ZOOM EF-S18-200
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S18-200',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Objetiva
        

        //M??quina Fotogr??fica Canon EOS200D
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina Fotogr??fica Canon EOS200D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim M??quina Fotogr??fica Canon EOS200D

        //Objectiva ZOOM EF-S55-250
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Objectiva ZOOM EF-S55-250',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Objectiva ZOOM EF-S55-250

        //Flash C??mara fotogr??fica c/adaptador p/ trip??
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Flash C??mara fotogr??fica c/adaptador p/ trip??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;



        //Fim Flash C??mara fotogr??fica c/adaptador p/ trip??


        //Mochila Lowepro
        

        //Fim Mochila Lowepro

        //Volante e Acess??rios

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Volante e Acess??rios',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Volante e Acess??rios


        //Joystick - Logitech

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Joystick - Logitech',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;


        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Joystick - Logitech',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Joystick - Logitech


        //Oculus HTC ViVE

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Oculus HTC ViVE',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        
        //Fim Oculus HTC ViVE


        //Xbox One S
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Xbox One S',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;


        //Fim Xbox One S



        //Roll-up publicit??rio

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Roll-up publicit??rio',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Roll-up publicit??rio


        //Mini Mac
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Mini Mac',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Mini Mac
        // IMac
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'IMac',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'IMac',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Mac
        // Mac 5k 
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'iMac Retina 5K',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim 5k Mac


        //Mac 4k
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'iMac Retina 4K',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'iMac Retina 4K',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        // Fim Mac 4k


        //MacPro
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'MacPro',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim MacPro


        //Monitor Dell S2817Q 28"
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor Dell S2817Q 28"',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Monitor Dell S2817Q 28"



        //Monitor LG Flatron E2350V-PV

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Monitor LG Flatron E2350V-PV


        //Slider RatRig V45
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Monitor LG Flatron E2350V-PV',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Slider RatRig V45



        //FOTGA DP300
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300"',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300"',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300"',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'FOTGA DP300',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim FOTGA DP300


        //Raspberry Pi3

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Raspberry Pi3',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //FIm Raspberry Pi3


        //Sensor Kit V2.0 for Raspberry Pi B+

        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor Kit V2.0 for Raspberry Pi B+',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor Kit V2.0 for Raspberry Pi B+',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor Kit V2.0 for Raspberry Pi B+',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor Kit V2.0 for Raspberry Pi B+',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //FIm sensor Kit
        
        //Raspberri pi 3 +
        
        for($j=0; $j<60; $j++){
            DB::table('items')->insert([
                'id_ipvc'=> "Lia-i-".$i,
                'name' => 'Pi-Top Raspeberry Pi3 B+',
                'categoria_id'=> '1',
                'id_atributos'=>'1',
            ]);
            $i++;
        }


        //Fim Raspberri
            

        //Kit streaming
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Kit Sreaming',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim kit streaming


        //TV 138 cm
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'TV 138 cm',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim TV 138 cm


        //Sensor 3D - ORBBEC
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor 3D - ORBBEC',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor 3D - ORBBEC',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Sensor 3D - ORBBEC',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Sensor 3D - ORBBEC


        //Leap Motion
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'LEAP Motion',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'LEAP Motion',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'LEAP Motion',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm Leap Motion


        // Trip?? ManFrotto MVT
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Trip?? ManFrotto MVT',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Trip?? ManFrotto MVT


        //Kinect XBOX 360
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Kinect XBOX 360',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Kinect XBOX 360


        //Televisor PLASMA LG
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Televisor PLASMA LG',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Televisor PLASMA LG


        //Projector Multim??dia EPSON EB-X9
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Projector Multim??dia EPSON EB-X9',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Projector Multim??dia EPSON EB-X9',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Projector Multim??dia EPSON EB-X9
        

        //TELA PROJEC????O 155CM BEANCON C/TRIP??
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'TELA PROJEC????O 155CM BEANCON C/TRIP??',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm TELA PROJEC????O 155CM BEANCON C/TRIP??


        //Xeon TSUNAMI
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Xeon TSUNAMI',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm XEON Tsunami


        //Iluminador LEDS 5600??K F&V K480
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Fim Iluminador LEDS 5600??K F&V K480',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Iluminador LEDS 5600??K F&V K480



        //Cubo de luz
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Cubo de luz',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Cubo de luz



        //Abafador de vento
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Abafador de vento',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm Abafador de vento


        //Trip?? Manfrotto Professional
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Trip?? Manfrotto Professional',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //FIm Trip?? Manfrotto Professional


        //Kit cartboard - oculos Realidade virtual
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Kit cartboard - oculos Realidade virtual',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Kit cartboard - oculos Realidade virtual



        //??culos Realidade Aumentada - optivent
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => '??culos Realidade Aumentada - optivent',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //??culos Realidade Aumentada - optivent


        //Tablet Galaxy Tab
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Tablet Galaxy Tab',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim Tablet Galaxy Tab


        //M??quina filmar HDV Sony
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'M??quina filmar HDV Sony',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;
        //Fim M??quina filmar HDV Sony




        //Conjunto Fotografia CANON EOS 550D
        DB::table('items')->insert([
            'id_ipvc'=> "Lia-i-".$i,
            'name' => 'Conjunto Fotografia CANON EOS 550D',
            'categoria_id'=> '1',
            'id_atributos'=>'1',
        ]);
        $i++;

        //Fim Conjunto Fotografia CANON EOS 550D


        
    }
}

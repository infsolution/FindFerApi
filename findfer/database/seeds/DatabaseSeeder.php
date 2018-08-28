<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use findfer\model\Address;
use findfer\model\Market;
use findfer\model\Product;
use findfer\model\Stand;
use findfer\model\Poster;
use findfer\model\Image;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('PostSeeder');
        $this->call('SeriveSeeder');
        $this->call('AboultSeeder');
        $this->call('ContactSeeder');
        $this->call('AddressSeeder');
        $this->call('MarketSeeder');
        $this->call('ProductSeeder');
        $this->call('StandSeeder');
        $this->call('PosterSeeder');
        $this->call('SaleSeeder');
        $this->call('ImageSeeder');
        $this->call('CouponSeeder');
        $this->call('UserUserSeeder');
        $this->call('SalePosterSeeder');
    }
}

class PostSeeder extends Seeder{
    public function run()
    {
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/93JIrgs.jpg', 'Conectar feirantes a clientes','O principal objetivo da FindFer é criar um elo entre feirantes e clientes de feiras, por meio de uma ampla divulgação de feiras, produtos de estabelecimentos de feirantes, gerando de forma controlada uma cadeia de interesses voltada para o ecossistema de feiras livres e o comércio de produtos agrícolas e afins.','Cicero']);
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/UrCRzSN.jpg', 'Mapa com localização das feiras','O app FindFer dispõe de uma sistema de mapas onde o cliente pode encontrar as feiras mais próximas de sua localização , além de todas as feiras cadastradas na plataforma, facilitando a localização de bancas e produtos.','Cicero']);
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/XkHeQWo.jpg', 'Opções de negociação para clientes','O app FindFer permite que os clientes enviem à plataforma solicitações de PROMOÇÕES, que é uma forma de o cliente negociar com os feirantes, pedindo que os mesmos disponibilizem produtos do seu interesse a um preço específico.','Cicero']);
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/fx4FDwl.jpg', 'Fidelização e aumento nas vendas','A partir da divulgação de seus produtos os feirantes podem atrair mais clientes para as feiras livres e seus estabelecimentos, pois quando o cliente está bem informado sobre produtos e sua localização exata, surge maior interesse em comprar.','Cicero']);
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/urZUMYl.jpg', 'Vendas pela plataforma','A plataforma FindFer permite que os feirantes comercializem seus produtos direto do aplicativo, gerando comodidade para clientes que podem pagar com cartão de crédito ou débito.','Cicero']);
        DB::insert('insert into posts(url_image, title, content, autor)values(?,?,?,?)',['https://i.imgur.com/hzcW8mA.jpg', 'O cliente recebe seu produto em casa','O cliente pode escolher em ir buscar o produto na banca ou receber em casa de forma cômoda e segura, em um tempo determinado e a qualidade dos produtos garantida..','Cicero']);
    }
}
class SeriveSeeder extends Seeder{
    public function run()
    {
        DB::insert('insert into services(title, description, value)values(?,?,?)',['Venda de creditos de promoção','O feirante cadastrado em uma conta free, pode comprar creditos para poder criar promoções, que é um beneficio de contas premium.',10.99]);
        //DB::insert('insert into services(title, description, value)',[]);
        //DB::insert('insert into services(title, description, value)',[]);
    }
}
class AboultSeeder extends Seeder{
    public function run()
    {
        DB::insert('insert into aboults(title, description, founder,date_founder, url_image_startup, url_image_founder)values(?,?,?,?,?,?)',['FindFer - Conectando Feirantes a clientes','<p>A <strong>FindFer</strong> é uma plataforma que visa conectar de forma fácil e inteligente, feirantes e potenciais clientes de feiras com uma ampla divulgação de feiras e produtos e crianco um contato direto dos feirantes com sues clientes.</p>

<p>A FindFer disponibiliza para os feirantes uma comunicação direta com cada um de seus clientes de forma automática, sempre que o feirante anuncía seu produto seus clientes são notiifcados, e sempre que um cliente está na feira os feirante já tem conhecimento e pode criar promoções especificas de acordo com o perfil do cliente.</p>

<p>O clientes também podem pedir promoções! Quando um cliente está na feira que não encotra aquilo que procura com um bom preço ele pode <strong>"Pedir uma Promoção"</strong>  especificando o produto e quanto estão dispostos a pagar e os feirantes habilitados podem ou não fazer essa promoção.</p>','Cicero Leonardo da Silva','2017-04-17',null,null]);
    }
}
class ContactSeeder extends Seeder{
    public function run()
    {
        DB::insert('insert into contacts(type,value)values(?,?)',['Telefone','(86)988698580']);
        DB::insert('insert into contacts(type,value)values(?,?)',['Email','contato@findfer.com.br']);
        DB::insert('insert into contacts(type,value)values(?,?)',['Email','clsinfsolution@gmail.com']);
        DB::insert('insert into contacts(type,value)values(?,?)',['Mensagem no site','www.findfer.com.br/contacts']);
    }
}



class AddressSeeder extends Seeder{
	public function run()
    {
        Address::create(['district'=>'Parque Piaui','city'=>'Teresina','state'=>'Piaui','country'=>'Brasil']);
        Address::create(['district'=>'Piçarra','city'=>'Teresina','state'=>'Piaui','country'=>'Brasil']);
        Address::create(['district'=>'Vermelha','city'=>'Teresina','state'=>'Piaui','country'=>'Brasil']);
    }
}

class MarketSeeder extends Seeder{
	public function run()
    {
        Market::create(['address_id'=>1,'name'=>'Mercado do Piçarra','description'=>'Feira da Piçarra','latitude'=>42.584297,'longitude'=>-5.981236,'foundation'=>'1941-12-19']);
        Market::create(['address_id'=>2,'name'=>'Mercado do Parque Piaui','description'=>'Feira do parque','latitude'=>42.896584,'longitude'=>-5.4874625,'foundation'=>'1970-02-10']);
    }
}
class ProductSeeder extends Seeder{
	public function run()
    {
       Product::create(['name'=>'Manga']);
       Product::create(['name'=>'Banana']);
       Product::create(['name'=>'Laranja']);
       Product::create(['name'=>'Uva']);
       Product::create(['name'=>'Acerola']);
    }
}
class StandSeeder extends Seeder{
	public function run()
    {
        Stand::create(['market_id'=>1,'user_id'=>1,'name'=>'Banca do Cicim','slogan'=>'Banca de produtos bons e baratos','latitude'=>42.896587,'longitude'=>-5.214536]);
        Stand::create(['market_id'=>2,'user_id'=>1,'name'=>'Banca do Cicim da Piçarra','slogan'=>'Banca de produtos bons e baratos agora na Piçarra','latitude'=>42.125896,'longitude'=>-5.897025]);
    }
}
class PosterSeeder extends Seeder{
	public function run()
    {
        Poster::create(['stand_id'=>1,'product_id'=>1,'title'=>'Manga','description'=>'Manga Roda','value'=>5.99]);
        Poster::create(['stand_id'=>2,'product_id'=>2,'title'=>'Banana','description'=>'Banana maçã','value'=>5.99]);
    }
}
class SaleSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class ImageSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class CouponSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class UserUserSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class SalePosterSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
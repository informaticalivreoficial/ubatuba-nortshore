<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Google\Service\Slides;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants'; 

    protected $fillable = [
        'name', 
        'status',
        'ano_de_inicio',
        'slug',
        'cnpj',
        'ie',
        'dominio',
        'subdominio',
        'template',
        //Subscription
        'subscription_id', 'subscription', 'expires_at', 'subscription_active', 'subscription_suspended',
        //Imagens
        'logomarca', 'logomarca_admin', 'logomarca_footer', 'favicon', 'metaimg', 'imgheader', 'marcadagua',
        //SMTP
        'smtp_host', 'smtp_port', 'smtp_user', 'smtp_pass',
        //Contato
        'telefone', 'celular', 'whatsapp', 'skype', 'email', 'email1',
        //Endereço
        'cep', 'rua', 'num', 'complemento', 'bairro', 'uf', 'cidade',
        //Social links
        'facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo', 'fliccr', 'soundclound', 'snapchat',
        //Seo
        'descricao',
        'mapa_google',
        'metatags',
        'analytics_view',
        'tagmanager_id',
        'rss',
        'rss_data',
        'sitemap',
        'sitemap_data',
        'politicas_de_privacidade'    
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->uuid = Str::uuid();
        });
    }

    /**
     * Relacionamentos
    */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }

    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function parceiros()
    {
        return $this->hasMany(Parceiro::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Accerssors and Mutators
    */        
    public function getmetaimg()
    {
        if(empty($this->metaimg) || !Storage::disk()->exists($this->metaimg)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->metaimg);
    }
    
    public function getlogomarca()
    {
        if(empty($this->logomarca) || !Storage::disk()->exists($this->logomarca)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->logomarca);
    }
    
    public function getlogoadmin()
    {
        if(empty($this->logomarca_admin) || !Storage::disk()->exists($this->logomarca_admin)) {
            return url(asset('backend/assets/images/logomarca-admin.png'));
        } 
        return Storage::url($this->logomarca_admin);
    }
    
    public function getfaveicon()
    {
        if(empty($this->favicon) || !Storage::disk()->exists($this->favicon)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->favicon);
    }
    
    public function getmarcadagua()
    {
        if(empty($this->marcadagua) || !Storage::disk()->exists($this->marcadagua)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->marcadagua);
    }
    
    public function gettopodosite()
    {
        if(empty($this->imgheader) || !Storage::disk()->exists($this->imgheader)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->imgheader);
    }

    public function getnotopodosite()
    {
        if(empty($this->imgheader) || !Storage::disk()->exists($this->imgheader)) {
            return url(asset('backend/assets/images/image.jpg'));
        } 
        return Storage::url($this->imgheader);
    }
    
    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = (!empty($value) ? $this->clearField($value) : null);
    }
    
    public function getCepAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return substr($value, 0, 5) . '-' . substr($value, 5, 3);
    }
    
    public function setWhatsappAttribute($value)
    {
        $this->attributes['whatsapp'] = (!empty($value) ? $this->clearField($value) : null);
    }
    
    //Formata o celular para exibir
    public function getWhatsappAttribute($value)
    {
        if (empty($value)) {
            return null;
        }
        return  
            substr($value, 0, 0) . '(' .
            substr($value, 0, 2) . ') ' .
            substr($value, 2, 5) . '-' .
            substr($value, 7, 4) ;
    }

    
    private function convertStringToDate(?string $param)
    {
        if (empty($param)) {
            return null;
        }
        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
    }
    
    private function clearField(?string $param)
    {
        if (empty($param)) {
            return null;
        }
        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}

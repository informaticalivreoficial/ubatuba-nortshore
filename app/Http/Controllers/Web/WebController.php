<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Imovel;
use Illuminate\Http\Request;

use App\Services\{
    ConfigService,
};
use App\Support\Seo;
use Carbon\Carbon;

class WebController extends Controller
{

    protected $configService;
    protected $seo, $tenant;

    public function __construct(ConfigService $configService)
    {
        $this->configService = $configService;
        $this->seo = new Seo();
        $this->tenant = 2;
    }

    public function home()
    {
        $imoveisParaLocacao = Imovel::orderBy('created_at', 'DESC')
                            ->locacao()
                            ->where('tenant_id', $this->tenant)
                            ->available()
                            ->limit(24)
                            ->get();

        $head = $this->seo->render($this->configService->getConfig()->name ?? 'Informática Livre',
            $this->configService->getConfig()->descricao ?? 'Informática Livre desenvolvimento de sistemas web desde 2005',
            route('web.home'),
            $this->configService->getMetaImg() ?? 'https://informaticalivre.com/media/metaimg.jpg'
        );

		return view('web.'.env('APP_TEMPLATE').'.home',[
            'head' => $head,
            'imoveisParaLocacao' => $imoveisParaLocacao
		]);
    }
}

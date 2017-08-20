<?php

namespace Produtos\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      //  $this->app->bind(
        //    'Illuminate\Contracts\Auth\Registrar',
        //    'App\Services\Registrar'
        //  );

        $this->app->bind(\Produtos\Repositories\Contracts\ProdutoRepositoryInterface::class, \Produtos\Repositories\Eloquent\ProdutoRepository::class);
      }

    //  public function register()
    //  {
    //      $this->app->bind(\CodeProject\Repositories\ProjectRepository::class, \CodeProject\Repositories\ProjectRepositoryEloquent::class);
    //      $this->app->bind(\CodeProject\Repositories\ProjectNoteRepository::class, \CodeProject\Repositories\ProjectNoteRepositoryEloquent::class);
      //    //:end-bindings:
    //  }


}

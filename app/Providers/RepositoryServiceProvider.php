<?php

namespace App\Providers;



use App\Repositories\Pokemon\IPokemonRepository;
use App\Repositories\Pokemon\PokemonRepository;
use App\Repositories\Trainer\TrainerRepository;
use App\Repositories\Trainer\ITrainerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ITrainerRepository::class, TrainerRepository::class);
        $this->app->bind(IPokemonRepository::class, PokemonRepository::class);
        // add more...
    }
}

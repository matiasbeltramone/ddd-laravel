<?php
declare(strict_types=1);

namespace App\Http\Controllers;

final class ArticleController extends Controller
{
    /**
     * @var CommandBus $commandBus
     */
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function store(StoreArticleRequest $request)
    {
        $command = new CreateArticleCommand(
            $request->input('author_id'),
            $request->input('title'),
            $request->input('content')
        );

        $this->commandBus->handle($command);

        return response()->json(['result' => 'Article was created', ], 201);
    }
}

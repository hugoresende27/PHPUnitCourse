<?php
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryTestCase;


class ArticleTest extends MockeryTestCase
{

    protected $article;
    public function setUp(): void
    {
        $this->article = new App\Article;
    }
    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithTitle()
    {
        // $this->assertEquals($article->getSlug(), ""); //Failed asserting that '' is identical to null.
        $this->assertSame($this->article->getSlug(), "");
    }

    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An example article";
        $this->assertEquals($this->article->getSlug(), "An_example_article");
    }


    public function testSlugHaswhitespaceReplacedBySingleUnderscore()
    {
        $this->article->title = "An    example    \n  article";
        $this->assertEquals($this->article->getSlug(), "An_example_article");
    }


    public function testSlugDoesNotStartOrEndWithAnUnderscore()
    {
        $this->article->title = " An example article ";
        $this->assertEquals($this->article->getSlug(), "An_example_article");
    }

}
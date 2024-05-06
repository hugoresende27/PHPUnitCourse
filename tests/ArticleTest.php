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

    public function testSlugDoesNotHaveAnyNonWordCharacters()
    {
        $this->article->title = "Read! This! Now!";
        $this->assertEquals($this->article->getSlug(), "Read_This_Now");
    }

    /**
     * [Description for testSlug]
     * this replace all tests above
     * @param mixed $title
     * @param mixed $slug
     * @dataProvider titleProvider
     * @return [type]
     * 
     */
    public function testSlug($title, $slug)
    {
        $this->article->title = $title;
        $this->assertEquals($this->article->getSlug(), $slug);
    }

    /**
     * [titleProvider]
     * used with annotation @dataProvider function
     * @return [type]
     * 
     */
    public function titleProvider()
    {
        return [
            "slug has spaces replaced by underscores" => ["An example article","An_example_article"], // with data set "slug has spaces replaced by underscores"
            "slug has spaces replaced by single underscores" =>[" An example article ","An_example_article"],
            "slug does not start or end with underscores" =>["An    example    \n  article", "An_example_article"], // ArticleTest::testSlug with data set #2 
            "slug does not have any non word chars" =>["Read! This! Now!", "Read_This_Now"]
        ];
    }

}
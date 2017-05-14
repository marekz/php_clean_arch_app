<?php
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2017 SBG
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace SBG\Tests\App;


use \Mockery as m;
use \PHPUnit_Framework_TestCase as TestCase;
use SBG\App\Entity\WebResult;
use SBG\App\Model\FakeFetcher;
use SBG\App\Model\GoogleFetcher;
use SBG\App\Model\RestFetcher;
use SBG\App\Model\WebFetcher;


/**
 * @author Artur Augustyniak <artur@aaugustyniak.pl>
 */
class AppTest extends TestCase
{

    /**
     * @param WebFetcher $wf
     * @param string $param
     */
    private function makePolimorphicAction(WebFetcher $wf, $param)
    {
        var_dump($wf->get($param));
    }


    /**
     * @test
     */
    public function tmp_run()
    {
        $param = "blonde";
        $fetchers = [new RestFetcher(), new GoogleFetcher(), new FakeFetcher()];

        foreach ($fetchers as $fetcher) {
            $this->makePolimorphicAction($fetcher, $param);

        }
    }

}

<?php

use Sun\Flash;
use Mockery as m;

class FlashTest extends PHPUnit_Framework_TestCase
{
    /**
     * Mockery close
     */
    public function tearDown()
    {
        m::close();
    }

    /** @test */
    public function  it_shows_error_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
             ->once()
             ->with('flash_notification.message', 'error');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'danger');

        $flash->error('error');
    }

    /** @test */
    public function it_shows_default_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.message', 'default');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'info');

        $flash->message('default');
    }

    /** @test */
    public function it_shows_info_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.message', 'info');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'info');

        $flash->info('info');
    }

    /** @test */
    public function it_shows_warning_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.message', 'warning');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'warning');

        $flash->warning('warning');
    }

    /** @test */
    public function it_shows_success_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.message', 'success');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'success');

        $flash->success('success');
    }

    /** @test */
    public function it_shows_confirm_message()
    {
        $mock = m::mock('Sun\Session');

        $flash = new Flash($mock);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.title', 'title');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.message', 'message');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.level', 'info');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.overlay', true);

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.dismissText', 'No');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.dismissType', 'default');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.allowText', 'Yes');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.allowType', 'success');

        $mock->shouldReceive('create')
            ->once()
            ->with('flash_notification.submitButton', true);

        $flash->confirm('title', 'message');
    }
}

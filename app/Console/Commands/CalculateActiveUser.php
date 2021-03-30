<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CalculateActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     * 供我们调用命令
     *
     * @var string
     */
    protected $signature = 'larabbs:calculate-active-user';

    /**
     * The console command description.
     * 命令的描述
     *
     * @var string
     */
    protected $description = '生成活跃用户';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * 执行逻辑
     *
     * @return int
     */
    public function handle(User $user)
    {
        // 在命令行打印一行信息
        $this->info('开始计算...');

        $user->calculateAndCacheActiveUsers();

        $this->info('生成成功！');
    }
}

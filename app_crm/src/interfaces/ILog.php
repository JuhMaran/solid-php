<?php

namespace AppCrm\interfaces;

use AppCrm\componentes\Log;

interface ILog
{
    public function registrarLog(Log $log);
}

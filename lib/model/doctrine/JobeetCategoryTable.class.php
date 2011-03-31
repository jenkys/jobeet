<?php

class JobeetCategoryTable extends Doctrine_Table
{

    public function getWithJobs()
    {
        $q = $this->createQuery('c')
                        ->leftJoin('c.JobeetJobs j')
                        ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()))
                        ->orderBy('created_at DESC')
        ;

        return $q->execute();
    }

    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetCategory');
    }

}
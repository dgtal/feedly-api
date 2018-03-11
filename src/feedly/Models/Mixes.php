<?php

namespace feedly\Models;

class Mixes extends FeedlyModel
{
    public function getEndpoint()
    {
        return '/v3/mixes/contents';
    }

    public function get($id, $count=3, $unreadOnly=false, $hours=null, $newerThan=null, $backfill=null, $locale=null)
    {
        $query = http_build_query(['streamId' => $id, 'count' => $count]);

        return $this->getClient()
                    ->get($this->getApiBaseUrl() . $this->getEndpoint() . '?' . $query);
    }

}

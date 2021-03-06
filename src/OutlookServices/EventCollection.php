<?php


namespace Office365\PHP\Client\OutlookServices;
use Office365\PHP\Client\Runtime\CreateEntityQuery;
use Office365\PHP\Client\Runtime\ClientObjectCollection;

class EventCollection extends ClientObjectCollection
{

    /**
     * Create an event in the user's primary calendar or a specific calendar by posting to the calendar's events endpoint.
     * @return Event
     */
    public function createEvent() {
        $event = new Event($this->getContext());
        $qry = new CreateEntityQuery($this, $event);
        $this->getContext()->addQuery($qry, $event);
        $this->addChild($event);
        return $event;
    }

}
<?php
namespace App\Enums;

enum LeadStatus: string
{
    case NEW_LEAD = 'New Lead';
    case CONTACTED = 'Contacted';
    case QUALIFIED = 'Qualified';
    case NOT_INTERESTED = 'Not Interested';
    case FOLLOW_UP_REQUIRED = 'Follow-Up Required';
    case MEETING_SCHEDULED = 'Meeting Scheduled';
    case PROPOSAL_SENT = 'Proposal Sent';
    case NEGOTIATION = 'Negotiation';
    case CONVERSION = 'Conversion';
    case CLOSED_LOST = 'Closed Lost';
}

## Examples of Bad Comments

### Misleading comments
```
// Utility method that returns when closed is true. Throws an exception
// if the timeout is reached.
public function waitForClose($timeoutMillis)
{
    if(!$this->closed)
    {
        wait($timeoutMillis);
        if(!$this->closed) {
            throw new Exception("MockResponseSender could not be closed");
        }
    }
}
```

In this example, the method does not return anything, apart from that the comment also has a lot of mumbling in it.

### Mandated comments

To have comments, just for the sake of having comments in the doc blocks

```
/**
*
* @param string $title               The title of the CD
* @param string $author              The author of the CD
* @param int    $tracks              The number of tracks on the CD
* @param int    $durationInMinutes   The duration of the CD in minutes
*/
public function addCD($title, $author, $tracks, $durationInMinutes) {
    // ...
}
```

### Journal Comments

Long ago there was a good reason to create and maintain these log entries at the start
of every module.

Nowadays we have code control systems in place which could do the same

```
/*
 * Changes (from 11-Oct-2001)
 * --------------------------
 * 11-Oct-2001 : Re-organised the class and moved it to new package
 * com.jrefinery.date (DG);
 * 05-Nov-2001 : Added a getDescription() method, and eliminated NotableDate
 * class (DG);
 * 12-Nov-2001 : IBD requires setDescription() method, now that NotableDate
 * class is gone (DG); Changed getPreviousDayOfWeek(),
 * getFollowingDayOfWeek() and getNearestDayOfWeek() to correct
 * bugs (DG);
 * 05-Dec-2001 : Fixed bug in SpreadsheetDate class (DG);
 * 29-May-2002 : Moved the month constants into a separate interface
 * (MonthConstants) (DG);
 * 27-Aug-2002 : Fixed bug in addMonths() method, thanks to N???levka Petr (DG);
 * 03-Oct-2002 : Fixed errors reported by Checkstyle (DG);
 * 13-Mar-2003 : Implemented Serializable (DG);
 * 29-May-2003 : Fixed bug in addMonths method (DG);
 * 04-Sep-2003 : Implemented Comparable. Updated the isInRange javadocs (DG);
 * 05-Jan-2005 : Fixed bug in addYears() method (1096282) (DG);
 */
```

### Noise Comments

```
class AnnualDateRule 
{
    /** The name. */
    private $name;

    /** The day of the month. */
    private $dayOfMonth;
    
    /**
    * Constructor.
    *
    * @param int $dayOfMonth
    */
    protected AnnualDateRule($dayOfMonth) {
        // ..
    }
}
```

### Don't use comments when you could use a meaningful name
```
// Check to see if the employee is eligible for full benefits
if (($employee->flags & $HOURLY_FLAG) && ($employee->age > 65)) {
    // ...
}
```

can be easily replaced with

```
if ($employee->isEligibleForFullBenefits()) {
    // ...
}
```
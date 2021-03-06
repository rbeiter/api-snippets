// Download the **Next-Gen** twilio-java library from:
// twilio.com/docs/libraries/java#installation-nextgen
import com.twilio.sdk.Twilio;
import com.twilio.sdk.resource.preview.wireless.RatePlan;

public class Example {

  // Find your Account Sid and Token at twilio.com/console
  public static final String ACCOUNT_SID = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
  public static final String AUTH_TOKEN = "your_auth_token";

  public static void main(String[] args) {
    Twilio.init(ACCOUNT_SID, AUTH_TOKEN);

    Iterable<RatePlan> plans = RatePlan.read().execute();
    for (RatePlan plan : plans) {
      System.out.println(plan.getSid());
      System.out.println(plan.getAlias());
    }
  }
}
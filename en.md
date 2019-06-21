Homo Socialis
=============

"Homo Socialis" is a network of people, providing mutual financial aid in difficult living circumstances. It is a social safety net for emergencies based on collective decision-making, as well as monthly contributions, implemented through a decentralized, self-governing organizational structure.

#### Table of contents

  * [How it works]
  * [Concept]
  * [Implementation]
  * [Contact]

# How it works

Imagine that once upon a time... there was a group of people. They regularly met and each one always put some money in a collective savings pot. If one of them found themselves in need, the group would meet and decide to help them with money from their savings pot.

Thanks to Smart Contracts, Decentralized Autonomous Organizations and the Internet, today, this can be run collectively for almost any size group of people - without all members of the group even having to know one another - without the need for them to meet to make decisions and all without central management.

We are working on such a trial project accompanied by scientific researchers.


# Concept

The following implementation is only aimed at clarifying the basic methods of operation and the procedure. It is not a detailed, well-defined plan. Please refer to the roadmap for more information.

#### Contributions

  * The network owns a financial pot. This is made up of member deposits that are submitted upon joining.
  * Each member owns this pot on a pro rata basis. If membership comes to an end, the proportional value is paid back to the member.
  * Each member pays monthly dues.
  * The network intends this pot to reach a specific amount. This amount corresponds to the amount of emergency aid that was approved and paid by the members over the last x years. New emergency expenses and changing membership numbers are continuously factored in to correspond to the desired pot value.
  * Emergency expenses are paid out of the collective pot.
  * The exact value of the monthly dues is recalculated each month.  This corresponds to:
    1. the average cost of emergency expenses per person per month in the last x years,
    2. also, if necessary, the sum required for the pot to reach its desired value in the next y years.
    - (The dues and the pot must adapt according to the current emergencies, the number of members and the conventions of the network.)
  * Therefore, current, approved emergencies have a direct (yet insignificant, minimal to perceptible) influence on:
    1. the size of the pot and, therefore, the value of individual pot holdings,
    2. the contributions paid from the following month onwards.
    *  (To illustrate: In a network of 100 members, allocating an amount of aid equal to $1,000, for example, (or $10,000) will lower the share value by $10 (or $100), as well as increase the contributions by $0.83 (or $8.33) minus the cases that now fall outside of the three year framework, for example.  Giving long-term aid of $1,000/month will result in an additional fee of $10/month.

#### Assistance

  * If a member is in distress, they can send out and publish (only within the network comprising the fictitious usernames / nicknames of their fellow members) a description of their situation along with a concrete plea to the network.
  * This request is sent to a randomly-selected jury consisting of x members[^1]. These members must vote to endorse the request by a majority decision. The vote takes place online without consultation and everyone votes independently. Each voter will check whether they believe the request and the type of emergency situation follow the network's ground rules and will try to judge whether the amount requested is appropriate. A vote will usually have a minimal or possibly a noticeable effect on the share value of the pot, as well as on the monthly dues. Both will be shown to the voters so they can consider this in their decision and weigh up the consequences with the seriousness of the emergency. Each decides out of pure self-interest, taking into account that, one day, they may be on the other side of the fence and in need of help. This is the reason they participate in the network.
  * The result of the vote will be made public but the voting participants, as well as their votes, are only saved in a locked box[^2]. This means that the voters can vote anonymously, which minimizes the chances of those who vote against the request being branded negatively within the network. Therefore, they will not need to fear negative consequences should they themselves be in distress. If the result of the vote is challenged by a minimum number of members in the network, the vote can be checked by opening the locked box.
  * There is no legal claim to assistance. Each member must decide whether to participate, based on the behavior of the network, its financial situation and the level of contributions.

#### Control mechanism

  * All services offering help throughout the entire history of the network are visible to all. Repeated requests will be spotted. In a request for help, the members of the jury will look at the history of the individual concerned.
  * Depending on the nature of the emergency, a request for assistance may need to be substantiated by supporting documents from the hospital, police, witnesses, etc. Eventually, someone who personally knows the affected individual can be called upon from the network to substantiate their claim.
  * Any fraud or abuse that is discovered will be pursued by legal means and the person concerned will be liable for their pot share, among other measures taken.
  * One possibility is that x‰ of the monthly contributions will go towards funding a private detective pot. When voting to agree on the aid, if x number of voters express suspicion, an external service provider can be called upon to investigate the case. (Potentially, all aid cases may be randomly and periodically investigated.)  
    The fact that everyone knows about this means of monitoring should limit cases of abuse.
  * However, it is impossible to prevent all cases of abuse.

#### Ground Rules

  * The network provides a few clear and easily understandable principles, which members can use to orient themselves and deal with help requests and votes.
  * The network can adapt these principles to its changing needs through proposals and votes.
  * The principles are meant for guidance only. When voting on a request for aid, what counts are the personal choices made about each specific case and its merits.

#### Membership

  * If someone would like to join the network, they need a recommendation from at least one individual serving member. The person making the recommendation is known to everyone.  
    If someone wants to join but does not know anyone, they may introduce themselves online and express their wish to get to know a member in the vicinity.  
    There could be monthly or quarterly meetings of local network members so people can get to know one another better, allowing potential members to introduce themselves and propose their case for membership.
  * If a new member is recommended for admittance, another randomly selected member from nearby is asked to[^1] personally meet the prospective member and check their identity i.e. checking a form of identification and making a copy of it to save in a locked box[^2]. Only the prospective member's individually chosen username, the member who checked their identity and a hash value of their data are publicly visible. The ID card copy and the corresponding personal data stay in the locked box and can only be read when a minimum number of people makes a request to do so. (The hash value of the personal data does not provide any information but allows the member to be identified if they try to join multiple times or if their membership has already been suspended.)
  * The new member must pay the current month's dues.
  * The new member must also make a cash contribution, which will be added to the pot. The member then acquires a share of the communal pot, which they will receive back upon leaving or expulsion.  
    The deposit amount corresponds exactly to the current net asset value of the pot per member (i.e. mathematically, usually the maximum "current monthly contribution x 12 months x number of years of the pot float", for example, for a monthly contribution of $120-$250 and three years as a pot float, these would be $4,500-$9,000). Those who cannot do this can instead pay a 50% premium in addition to their monthly dues and, in this way, continuously increase their share in the pot (at a 50% premium and a 3-year pot float over about 6 years).
  * Membership ends as soon as a member so decides or if they do not pay their contributions. Also, at least x members can propose a member's expulsion, confirmed by a jury of a certain number of members selected at random.
  * The share of the pot will be returned upon termination of the membership - i.e. the pro rata value (net asset value) and not the nominal deposit amount.

The calculations above are only intended to explain the basic functionality.  Exact rules and technical implementation etc. are not intended here.


# Implementation

Technical implementation will take place, for example, through the use of Bitcoin as a medium of exchange and Bitcoin Smart Contracts through Rootstock (RSK), with a parallel individual DAO and Blockchain through Scala, with Scorex as a framework. At the moment we are also examining the use of Bitnation/Pangea. For programming enthusiasts, this opens up a large field of opportunities and also beliefs.

In just 6 months, the blockchain landscape will already have changed drastically and further developed. Furthermore, we only expect the project to start with the first participants in 1-2 years, followed by a 1-2 year experiment phase, probably with a few adjustments through the experiences gained.

For this reason, we are working on a largely centralized prototype for the experiment phase.

Our focus lies in the network consisting of people, the dynamics which are developed therein and in which form and under which rules the goal of mutual coverage for emergencies can be achieved most reasonably.

All software we develop will be published at no cost as an open source.


# Contact

We are currently working on preparations for the first trial project. This is focusing on voluntary participants in a specific region. In the interest of protecting their privacy, we are not willing to disclose any information before the start of the first phase.

If you have a background in a scientific field (sociology, economy) and have an interest in contributing your support, research, or analysis, then you are most welcome to participate in this experiment. Please write to us in this case from 2020.

In the first phase, our focus lies in covering emergencies and not in a type of self-governing universal decentralized welfare system for health, education, retirement, etc. Our information, homepage and forthcoming software will be open-source and we look forward to hearing about anyone working on similar projects. We will provide a platform to exchange our experiences.

$~$
  
©[HomoSocialis.org](https://homosocialis.org) – Version 2018-12-28

[^1]: "x members must implement": This means that x members are randomly selected out of the group and these members are summoned to do something. Upon completing their task, they receive positive points otherwise they receive negative points. These points are visible to all and members with too many negative points are visually highlighted. These points are only a signal and not any kind of currency. Any form of (crypto-)currency or an ICO are not the goal here.
[^2]: "this data comes in a locked box": this means that this data cannot be seen by any individual person but can be seen by all members as soon as a certain number of members so request (technically feasible, for example, by means of asymmetric encryption in combination with Shamir's Secret Sharing; perhaps threshold encryption could also be possible). Anonymous votes of the jury could possibly be implemented by means of "aggregate signature, linkable ring signature".


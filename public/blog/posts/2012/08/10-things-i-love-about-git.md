<!--
id: 29470887320
link: http://blog.hengkiardo.com/post/29470887320/10-things-i-love-about-git
slug: 10-things-i-love-about-git
date: Wed Aug 15 2012 15:22:00 GMT+0700 (WIT)
publish: 2012-08-015
tags: git, github
title: 10 Things I Love About Git
-->


[![](http://i.imgur.com/6OyaK.png)](http://blog.hengkiardo.com/post/29470887320/10-things-i-love-about-git)

Not everyone loves git. It’s true! But I do, and here are some reasons
why.

**1. Branching for experiments**

I want to experiment with rewriting some code and make commits while I’m
doing it.

In git I’d be able to just make a local branch and hack away. If I’m
successful then I can just push up the branch to the team’s repository
for code review. And that’s just one use case! Branches are just, so
easy in git that it opens up so many possibilities for workflow that the
community has come up with lots of different ways (e.g. git-flow,
github-flow) for a team to code.

In svn I have to do without commits as I’m developing, make a branch on
the remote repo (because there is only a remote repo), or copy out the
files to some other directory on my computer (yuck!) for this
experimental refactor.

**\
**

**2. Partial commits**

Oh no! I’ve just written too much code without committing.

In git I have a staging area to serve as an intermediate place for code
that I’m ready to commit up to the public repository. Edited file X and
made a fix to file Y? No problem. Commit file X, then commit file Y.

In svn there is no concept of partial commits. I have to fully commit my
current changes to the repo (because there is only a remote repo).

**3. Everyone has the repo**

Git not only allows me to easily experiment with the code; it allows me
to experiment with the repo itself. “What will happen when I merge
branch X to branch Y?”

In git I can try everything locally and back out if things get dicey.

In svn you cross your fingers: you’ll either have no trouble or be
immersed into a world of conflict resolution.

**4. Resolving conflicts is way easier (than svn)**

In git if I have a private branch from a branch that has been updated
with new (conflicting) commits I can rebase its commits one at at time
against the public destination branch. I can resolve conflicts as they
arise between my code and the current codebase. This makes dealing with
conflicts easy because I get the context of the conflict (my commit
message) and only see one conflict at a time.

In svn if I merge a branch against another and there are a lot of
conflicts there’s nothing I can do but resolve them all at the same
time. What a mess.

**\
**

**5. I can put my work aside**

I’m in a feature branch hacking away on a spike and have a dozen
modified files (remember, spike) and let’s set this up equally and say I
haven’t made any commits yet. Uh oh, we have a critical bug in
production that I need to fix NOW.

In git? No problem! I git stash away all my changes (including files
that I haven’t committed yet), checkout the master branch, create a
local branch for the bug and get to work. When the work is done and
master is deployed. I switch back to my spike branch and restore my work
exactly as I left it and pull in the bugfix code to be sure my spike is
accurate.

In svn? I have to make a new checkout of the repository to get a clean
state. Fix the code there and commit up. Then I either get to rewrite
the bugfix code into the checkout that has the spike code, or rewrite
the spike code into the current checkout that has the bugfix code.

**\
**

**6. Actual branches and tags**

Git has actual semantic branches and tags. The repository can can
authoritatively say that this is a branch and that is a tag and treat
them differently.

Svn has copies – copies! – of the repository directory in a folder
called “branches” or a folder called “tags”. There is no difference
between them and no requirement to even have the folders. You don’t even
need to have the folder “trunk”, that’s just a popular convention.

**\
**

**7. Merge metadata**

Git optionally (if you have a merge commit or not) records a ton of
metadata about a merge (author, betweenranch, conflicting files, commits
brought in by the merge, etc). git also automatically handles not
merging commits that are already in the destination branch.

Svn records nothing and you get to play the fun game of writing down the
starting commit number and putting it into your merge command e.g. (-r
11235:HEAD) it you want to avoid pointless conflicts.

**\
**

**8. Github**

Yes, github isn’t actually part of git but it may as well be. I believe
that git became the default choice for version control because github is
so excellent.

Subversion has no github because subversion can’t have a github. It
simply lacks the capabilities to allow hundreds of users to sporadically
collaborate to a project in any meaningful way.

No github means no pull requests. No pull requests mean no easy code
review. No pull requests mean you either give users write access to the
repo or you don’t. No pull requests mean you don’t get conversations
about code right in the repository.

**\
**

**9. Bisect for bug hunting awesomeness**

Git bisect lets you crawl through your repos history to find out when
some bug (although it could be any change) was introduced. I’m not going
to go into the details but the steps are essential: start a bisect, mark
a version of the repo as “good” and mark a version of the repo as “bad”.
Then you can either manually tell git whether or not the versions are
good or bad as it steps through the different commits, or give it a
shell command to be able to run for itself. At the end you’ll have the
exact commit where the bug was introduced.

**\
**

**10. The reflog saves you from yourself**

In git there is a repo log which holds the history of all the commits
you have made, and there is also a reflog that holds almost all the
actions you have done locally in your repo. All of them. Did you just
change branches? You’ve got an entry in your reflog. Did you just make a
commit? Reflog. Did you just completely blow away a day’s work with a
git reset –hard? Reflog.

What good is it to have actions logged in the reflog? Why, you can use
it to undo any action you’ve done locally to your repo. Seriously. Even
a git reset –hard. Even a completely crazy merge.

Even if you delete a branch with -D you can still recover your work by
rescuing the commits from your reflog. Although in that case you’ll
probably have a better time using git fsck to find the commits that have
been left dangling.


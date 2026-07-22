/**
 * Dynamic commit messages for this repository.
 * Used by sync-content.ts when creating contribution commits.
 * Rotate or edit these strings to keep commit history varied.
 */

export const COMMIT_MESSAGES: string[] = [
  'feat(site): refresh homepage hero project gallery',
  'fix(contact): validate required form fields',
  'refactor(css): consolidate shared layout utilities',
  'docs(readme): update construction site overview',
  'perf(assets): compress portfolio image payloads',
  'fix(nav): correct mobile menu toggle state',
  'feat(projects): add filter chips for sectors',
  'test(forms): cover contact submission happy path',
  'style(pages): align service section spacing',
  'chore(content): update company policy copy',
  'fix(portfolio): repair broken project thumbnails',
  'feat(about): expand team member profiles',
  'docs(deploy): note static hosting checklist',
  'refactor(js): simplify slider initialization',
  'chore(lint): clean unused stylesheet rules',
  'perf(pages): defer non-critical scripts',
  'fix(contact): prevent double form submit',
  'feat(home): highlight featured builds carousel',
  'chore(assets): organize img folder naming',
  'docs(changelog): note website content refresh',
];

/**
 * Pick a commit message by index (stable rotation).
 */
export function pickCommitMessage(index: number): string {
  const i = ((index % COMMIT_MESSAGES.length) + COMMIT_MESSAGES.length) % COMMIT_MESSAGES.length;
  return COMMIT_MESSAGES[i];
}

/**
 * Pick a commit message from a date string seed (uneven but deterministic).
 */
export function pickCommitMessageFromDate(dateKey: string): string {
  let hash = 0;
  for (let i = 0; i < dateKey.length; i++) {
    hash = (hash * 31 + dateKey.charCodeAt(i)) >>> 0;
  }
  return COMMIT_MESSAGES[hash % COMMIT_MESSAGES.length];
}
